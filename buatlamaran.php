<?php
	// session_start();
	// if(!isset($_SESSION["userlogin"])){
	// 	header("Location: login.php");
	// }
	require 'connect.php';

	$conn = connectDB();

	if(isset($_GET["idlowongan"])) {
		$idlowongan = $_GET["idlowongan"];
	}
	else {
		$idlowongan = 1000;
	}

	//$sql = "SELECT * from SIASISTEN.lowongan where SIASISTEN.lowongan.id_low = 1000";
	$sql = "SELECT mata_kuliah.nama, mata_kuliah.kode, kelas_mk.tahun, kelas_mk.semester, lowongan.nipdosenpembuka FROM SIASISTEN.lowongan, SIASISTEN.mata_kuliah, SIASISTEN.kelas_mk where SIASISTEN.lowongan.idlowongan = '$idlowongan' AND SIASISTEN.kelas_mk.id = SIASISTEN.lowongan.idkelasmk AND SIASISTEN.kelas_mk.kode_mk = SIASISTEN.mata_kuliah.kode";
	$sqlTemp = pg_query($conn, $sql);
	$row = pg_fetch_row($sqlTemp);


	// $sqlLowongan = "SELECT mk.nama, term.semester FROM SIASISTEN.lowongan lo, SIASISTEN.mata_kuliah mk, SIASISTEN.kelas_mk kmk, SIASISTEN.term term WHERE lo.id_low = '$idlowongan' and mk.kode = kmk.kode_mk and kmk.idkelasmk = lo.idkelasmk and ";
	//$sqlLowongan = "SELECT * from SIASISTEN.lowongan WHERE SIASISTEN.lowongan.id_low = '$idlowongan'";
	//$lowonganTemp = pg_query($conn, $sqlLowongan);

	$nama = $row[0];
	$kode_mk = $row[1];
	$taun = $row[2];
	$dosen = $row[3];

	if ($row[3] === "1"){
		$term = "Ganjil";
	}
	else if ($row[3] === "2"){
		$term = "Genap";
	}
	else
	$term = "SP";

	// $user = "bagus.putra";
	// $query = "SELECT SIASISTEN.mahasiswa.npm from SIASISTEN.mahasiswa where SIASISTEN.mahasiswa.username = '$user'";
	// $queryTemp = pg_query($conn, $query);
	// $row1 = pg_fetch_row($queryTemp);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="TK Basdat">
		<meta name="author" content="B04">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type= "text/css" href="css/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="script/bootstrap.min.js"></script>
		<title>SI Asisten</title>
	</head>

	<body>
		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">SI Asisten</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="#">Lowongan</a></li>
				<li><a href="#">Tambah Log</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"> Steven Alan</a></li>
				<li><a href="#"> Logout</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
  
		<div class="container-fluid">    
			
			<div class="panel center"> 
				<h1>Daftar Lowongan</h1>
				<div class="midit">
					<form action = "daftar.php" method="POST">
					<input type="hidden" name="idlowongan" value="<?php echo $idlowongan ?>">
					<table class="table table-bordered table-hover">
						<tbody>	
							<tr>
								<td>Term</td>
								<td><?php echo $term.", ".$taun; ?></td>
							</tr>
							<tr>
								<td>Kode</td>
								<td><?php echo $kode_mk; ?></td>
							</tr>
							<tr>
								<td>Mata Kuliah</td>
								<td><?php echo $nama; ?></td>
							</tr>
							<tr>
								<td>IPK</td>
								<td> <input type="text" name="IPK" method = ""></td>
							</tr>
							<tr>
								<td>SKS</td>
								<td> <input type="text" name="SKS" method = ""></td>
							</tr>
						</tbody>
					</table>

					<div class="tombol"> 
						<button type="submit"> Daftar </button>
						<button> Batal </button>
					</div>
					</form>
				</div>	
			</div>


		</div>

		<footer class="container-fluid text-center">
			<p>Kelompok B-04</p>
		</footer>		
	</body>
</html>