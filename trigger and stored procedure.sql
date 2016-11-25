// Trigger & stored procedure untuk update jumlah pelamar di lowongan

CREATE OR REPLACE FUNCTION hitung_jumlah_pelamar()
RETURNS trigger AS
$$
	BEGIN
	IF (TG_OP = 'INSERT') THEN
		UPDATE LOWONGAN SET jumlah_pelamar = 
			(SELECT COUNT(idlowongan)
			FROM LAMARAN
		WHERE idlowongan = NEW.idlowongan)
		WHERE idlowongan = NEW.idlowongan;
	ELSEIF (TG_OP = 'DELETE') THEN
		UPDATE LOWONGAN SET jumlah_pelamar = 
			(SELECT COUNT(idlowongan)
			FROM LAMARAN
		WHERE idlowongan = OLD.idlowongan)
		WHERE idlowongan = OLD.idlowongan;
	END IF;
	RETURN NEW;
END;
$$
LANGUAGE plpgsql;

CREATE TRIGGER hitung_pelamar
AFTER INSERT OR DELETE
ON LAMARAN FOR EACH ROW
EXECUTE PROCEDURE hitung_jumlah_pelamar();

// Trigger & stored procedure untuk update jumlah pelamar diterima di lowongan

CREATE OR REPLACE FUNCTION hitung_jumlah_pelamar_diterima()
RETURNS trigger AS
$$
	BEGIN
	IF (TG_OP = 'INSERT') THEN
		UPDATE LOWONGAN SET jumlah_pelamar_diterima = 
			(SELECT COUNT(idlowongan)
			FROM LAMARAN l, STATUS_LAMARAN s
		WHERE l.idlowongan = NEW.idlowongan AND l.id_st_lamaran = s.id AND s.status = 'diterima')
		WHERE l.idlowongan = NEW.idlowongan;
	ELSEIF (TG_OP = 'DELETE') THEN
		UPDATE LOWONGAN SET jumlah_pelamar_diterima = 
			(SELECT COUNT(idlowongan)
			FROM LAMARAN l, STATUS_LAMARAN s
		WHERE l.idlowongan = OLD.idlowongan AND l.id_st_lamaran = s.id AND s.status = 'diterima')
		WHERE l.idlowongan = OLD.idlowongan;
	END IF;
	RETURN NEW;
END;
$$
LANGUAGE plpgsql;


CREATE TRIGGER hitung_pelamar_diterima
AFTER INSERT OR DELETE
ON LAMARAN FOR EACH ROW
EXECUTE PROCEDURE hitung_jumlah_pelamar_diterima();
