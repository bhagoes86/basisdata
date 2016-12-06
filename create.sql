CREATE SCHEMA SIASISTEN;

SET search_path TO SIASISTEN;

CREATE TABLE MATA_KULIAH (
	kode CHAR(10) PRIMARY KEY NOT NULL,
	nama VARCHAR(100) NOT NULL,
	prasyarat_dari CHAR(10) REFERENCES MATA_KULIAH(kode)
);

CREATE TABLE TERM (
	tahun INTEGER UNIQUE NOT NULL,
	semester INTEGER UNIQUE NOT NULL,
	PRIMARY KEY (tahun, semester)
);

CREATE TABLE KELAS_MK (
	Id integer PRIMARY KEY NOT NULL,
	tahun integer REFERENCES TERM(tahun) NOT NULL,
	semester integer REFERENCES TERM(semester) NOT NULL,
	kode_MK CHAR(10) REFERENCES MATA_KULIAH(kode) NOT NULL
);

CREATE TABLE DOSEN(
	nip VARCHAR(20) PRIMARY KEY NOT NULL,
	nama VARCHAR(100) NOT NULL,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(20) NOT NULL,
	email VARCHAR(100) NOT NULL,
	universitas VARCHAR(100) NOT NULL,
	fakultas VARCHAR(100) NOT NULL
);

CREATE TABLE MAHASISWA(
	npm CHAR(10) PRIMARY KEY NOT NULL,
	nama VARCHAR(100) NOT NULL,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(20) NOT NULL,
	email VARCHAR(100) NOT NULL,
	email_aktif VARCHAR(100),
	waktu_kosong VARCHAR(100),
	bank VARCHAR(100),
	norekening VARCHAR(100),
	url_mukatab VARCHAR(100),
	url_foto VARCHAR(100)
);

CREATE TABLE TELEPON_MAHASISWA(
	npm CHAR(10) REFERENCES MAHASISWA(npm) NOT NULL,
	nomortelepon VARCHAR(20) NOT NULL,
	PRIMARY KEY (npm, nomortelepon)
);

CREATE TABLE MHS_MENGAMBIL_KELAS_MK(
	npm CHAR(10) REFERENCES MAHASISWA(npm) NOT NULL,
	IdKelasMK integer REFERENCES KELAS_MK(Id) NOT NULL,
	Nilai NUMERIC(5,2),
	PRIMARY KEY (npm, IdKelasMK)
);

CREATE TABLE DOSEN_KELAS_MK (
	nip VARCHAR(20) REFERENCES DOSEN(nip) NOT NULL,
	IdKelasMK integer REFERENCES KELAS_MK(Id) NOT NULL,
	PRIMARY KEY (nip, IdKelasMK)
);

CREATE TABLE LOWONGAN (
	IdLowongan INTEGER PRIMARY KEY NOT NULL,
	IdKelasMK INTEGER REFERENCES KELAS_MK(id) NOT NULL,
	status BOOLEAN NOT NULL DEFAULT FALSE,
	jumlah_asisten INTEGER NOT NULL DEFAULT 0,
	syarat_tambahan VARCHAR(100),
	NipDosenPembuka VARCHAR(20) REFERENCES DOSEN(nip) NOT NULL
);

CREATE TABLE STATUS_LAMARAN(
	Id INTEGER PRIMARY KEY NOT NULL,
	status VARCHAR(10) NOT NULL
);

CREATE TABLE LAMARAN(
	IdLamaran INTEGER UNIQUE NOT NULL,
	npm CHAR(10) REFERENCES MAHASISWA(npm) NOT NULL,
	IdLowongan INTEGER REFERENCES LOWONGAN(IdLowongan),
	ID_st_lamaran INTEGER REFERENCES STATUS_LAMARAN(Id) NOT NULL,
	IPK NUMERIC(5,2) NOT NULL,
	JumlahSKS INTEGER NOT NULL,
	nip VARCHAR(20) REFERENCES DOSEN(nip),
	PRIMARY KEY (IdLamaran, npm)
);

CREATE TABLE STATUS_LOG(
	id INTEGER PRIMARY KEY NOT NULL,
	status VARCHAR(10) NOT NULL
);

CREATE TABLE KATEGORI_LOG(
	id INTEGER PRIMARY KEY NOT NULL,
	kategori VARCHAR(50) NOT NULL
);

CREATE TABLE LOG(
	idLog INTEGER PRIMARY KEY NOT NULL,
	idLamaran INTEGER NOT NULL,
	npm CHAR(10) NOT NULL,
	ID_kat_log INTEGER REFERENCES KATEGORI_LOG(id) NOT NULL,
	ID_st_log INTEGER REFERENCES STATUS_LOG(id) NOT NULL,
	tanggal TIMESTAMP NOT NULL,
	jam_mulai TIME NOT NULL,
	jam_selesai TIME NOT NULL,
	deskripsi_kerja VARCHAR(100) NOT NULL,
  	 FOREIGN KEY (idLamaran, npm) REFERENCES LAMARAN(idLamaran, npm)
);

CREATE TABLE DOSEN(
	nik VARCHAR(20) PRIMARY KEY NOT NULL,
	nama VARCHAR(100) NOT NULL,
	username VARCHAR(30) NOT NULL,
	password VARCHAR(20) NOT NULL,
	email VARCHAR(100) NOT NULL,
);
