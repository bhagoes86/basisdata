<!DOCTYPE html>

<?php
	include "connect.php";
	
	if(!connectDB())
		die(pg_last_error());
	
	session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }

    $role = $_SESSION["role"];
	$nip = $_SESSION["nip"];

	$rows_per_page = 15;
	

	if(isset ($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 0;
	}

	$Batas_awal = $rows_per_page * $page;
	
	$conn = connectDB();
	
	if($role == "MHS"){
		$sql = 'SELECT l.idlowongan, mk.nama as namakelas, d.nama as namadosen, l.jumlah_asisten, l.status
				FROM siasisten.lowongan l
				JOIN siasisten.kelas_mk kmk ON l.idkelasmk=kmk.id
				JOIN siasisten.mata_kuliah mk ON kmk.kode_mk=mk.kode
				JOIN siasisten.dosen d ON d.nip=l.nipdosenpembuka';
	} else {
		$sql = 'SELECT l.idlowongan, mk.nama as namakelas, d.nama as namadosen, l.jumlah_asisten, l.status
				FROM siasisten.lowongan l
				JOIN siasisten.kelas_mk kmk ON l.idkelasmk=kmk.id
				JOIN siasisten.mata_kuliah mk ON kmk.kode_mk=mk.kode
				JOIN siasisten.dosen d ON d.nip=l.nipdosenpembuka
				WHERE d.nip = '. $nip;
	}
	$result = pg_query($conn, $sql);
	$total = pg_numrows($result);
	$pages = ceil($total / $rows_per_page);
	$sql .= ' LIMIT ' . $rows_per_page . ' OFFSET ' . $Batas_awal;
	$result = pg_query($conn, $sql);
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="TK Basdat">
		<meta name="author" content="B04">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<script src="script/jquery.min.js"></script>
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
					<li><a href="#">Home</a></li>
					<li class="active dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Lowongan
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="lihat-lowongan.php"> Lihat Lowongan</a></li>
							<?php if($role == "DSN" ) : ?><li><a href="tambah-lowongan.php">Tambah Lowongan</a></li><?php endif; ?>
						</ul>
					</li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"> Logout</a></li>
				  </ul>
				</div>
			 </div>
		</nav>
  
		<div class="container-fluid">
			<div class="panel center">
					<h2>Daftar Lowongan Asisten</h2>
					<p>
						<?php if($role == "DSN" ) : ?><a type="button" class="btn btn-default" href="tambah-lowongan.php">Tambah</a><?php endif; ?>
					</p>
				<div class="midit">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Mata Kuliah</th>
								<th>Dosen Pengajar</th>
								<th>Status</th>
								<th>Jumlah Lowongan</th>
								<th>Jumlah Pelamar</th>
								<th>Jumlah Pelamar Diterima</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
						
							<?php
								if (!$result) {
									echo "Dosen belum membuka lowongan asisten dosen";
								} else {
									while($row = pg_fetch_array($result)){  //Meng-echo masing-masing elemen row dari post
										echo "<tr>";
										
										if($row['status']){
											$stat = 'Buka';
										} else {
											$stat = 'Tutup';
										}
										$pelamar = count('SELECT * FROM lamaran WHERE idlowongan =' .$row['idlowongan']);
										$diterima = count('SELECT * FROM lamaran WHERE idlowongan =' .$row['idlowongan']. 'AND id_st_lamaran='3);
										
										echo "<td> ". $row['idlowongan'] . "</td>";
										echo "<td>" . $row['namakelas'] . "</td>";
										echo "<td>" . $row['namadosen'] . "</td>";
										echo "<td>" . $stat . "</td>";
										echo "<td>" . $row['jumlah_asisten'] . "</td>";
										echo "<td>" . $pelamar . "</td>";
										echo "<td>" . $diterima . "</td>";
										echo "<td>gepeng</td>";
										
										$stat = '';
										
										echo "</tr>";
										
									}
								}
							?>
						</tbody>
					</table>
					<p>
						<?php 
							if($page > 0 && ($page) <= ($total/15)){
								echo "<a href='?p=lowongan&page=" . ($page-1)."' class='btn btn-default' role='button'>Prev</a>"; 
								echo " ";
							}
							if((($page+1)*15) < $total){
								echo "<a href='?p=lowongan&page=" .($page+1)."' class='btn btn-default' role='button'>Next</a>"; 
							}
						?>
					</p>
				</div>	
			</div>
		</div>

		<footer class="container-fluid text-center">
			<p>Kelompok B-04</p>
		</footer>		
	</body>
</html>
