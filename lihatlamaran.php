<?php
	// session_start();
	// if(!isset($_SESSION["userlogin"])){
	// 	header("Location: login.php");
	// }
	require 'connect.php';


	if(isset($_GET["idlowongan"])) {
		$idlowongan = $_GET["idlowongan"];
	}

	$conn = connectDB();
	 $sql= "SELECT SIASISTEN.mahasiswa.nama, SIASISTEN.mahasiswa.npm, SIASISTEN.mahasiswa.email, SIASISTEN.status_lamaran.status FROM SIASISTEN.lamaran, SIASISTEN.mahasiswa, SIASISTEN.status_lamaran where SIASISTEN.mahasiswa.npm = SIASISTEN.lamaran.npm and SIASISTEN.status_lamaran.id = SIASISTEN.lamaran.id_st_lamaran and SIASISTEN.lamaran.idlowongan = '$idlowongan'";
	//$sql= 'select * from SIASISTEN.mahasiswa';
	$lamaranTemp = pg_query($conn, $sql);
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
				<li><a href="#">Buka Lowongan</a></li>
				<li><a href="#">Daftar Pelamar</a></li>
				<li><a href="#">Setujui Log</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
			  	<li><a href="#"> Abdul Hadi</a></li>
				<li><a href="#"> Logout</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
  
		<div class="container-fluid">    
			
			<div class="panel center"> 
				<h1>Daftar Pelamar</h1>
				<div class="midit">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th> No </th>
								<th> Nama </th>
								<th> NPM </th>
								<th> Email </th>
								<th> Profil </th>
								<th> Status </th>
							</tr>
						</thead>
						<tbody>

						<?php
							$nomor = 0;
							while($row = pg_fetch_row($lamaranTemp)) {

							$nomor = $nomor + 1;
							$nama = $row[0];
							$npm = $row[1];
							$email = $row[2];
							$status = $row[3];

							echo '<tr>
							<td>' . $nomor . '</td>
							<td>' . $nama . '</td>
							<td>' . $npm . '</td>
							<td>' . $email . '</td>
							<td><a href=/tugas/LihatDetailPelamar.php?npm='.$npm.'> Profil </a></td>
							<td>' . $status . '</td>
							</tr>';
							}
						?>
							<tr>
								<!-- <td> 1 </td>
								<td> Nama 1 </td>
								<td> 1406623240 </td>
								<td> nama1@ui.ac.id </td>
								<td><a href = "home.html"> profil </a></td>
								<td> Melamar </td> -->
							</tr>
							<tr>
								<!-- <td> 2 </td>
								<td> Nama 2 </td>
								<td> 1406543700 </td>
								<td> nama2@ui.ac.id </td>
								<td><a href = "home.html"> profil </a></td>
								<td> Direkomendasikan </td> -->
							</tr>
							<tr>
								<!-- <td> 3 </td>
								<td> Nama 3 </td>
								<td> 1406543701 </td>
								<td> nama3@ui.ac.id </td>
								<td><a href = "home.html"> profil </a></td>
								<td> Direkomendasikan </td> -->
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
		</div>

		<footer class="container-fluid text-center">
			<p>Kelompok B-04</p>
		</footer>		
	</body>
</html>