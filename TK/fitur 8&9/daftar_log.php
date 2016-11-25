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
				<li><a href="#">Lowongan</a></li>
				<li><a href="#">Tambah Log</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
			  	<li><a href="#"> Steven Alan </a></li>
				<li><a href="#"> Logout</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
  
		<div class="container-fluid">    
			<div class="panel center"> 
				<h1 style = 'text-align: center;'>Daftar Log</h1>
				<div class="midit">
					<button class='btn btn-default'><a href='buat_log.php'>Tambah</a></button>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
							<th>Kategori</th>
					        <th>Tanggal</th>
					        <th>Jam Mulai</th>
					        <th>Jam Selesai</th>
					        <th>Deskripsi kerja</th>
					        <th>Status</th>
					        <th> </th>
							</tr>
						</thead>
						<tbody>
							<tr>
							    <td>Mengoreksi</td>
								<td>12-09-2016</td>
								<td>09:00</td>
								<td>11:00</td>
								<td>Tugas 2</td>
								<td>-</td>
								<td><button class='btn btn-default'>Edit</button><button class='btn btn-default'>Delete</button></td>
							</tr>

							<tr>
							    <td>Asistensi</td>
								<td>12-09-2016</td>
								<td>09:30</td>
								<td>11:30</td>
								<td>UTS</td>
								<td>Disetujui</td>
								<td></td>
							</tr>

							<tr>
							    <td>Buat soal</td>
								<td>10-11-2016</td>
								<td>13:00</td>
								<td>15:00</td>
								<td>WS</td>
								<td>Ditolak</td>
								<td></td>
							</tr>

							<tr>
								<td>Rapat</td>
								<td>05-08-2016</td>
								<td>08:00</td>
								<td>10:30</td>
								<td>Tugas 3</td>
								<td>-</td>
								<td><button class='btn btn-default'>Edit</button><button class='btn btn-default'>Delete</button></td>
							</tr>

							<tr>
								<td>Persiapan Asistensi</td>
								<td>23-10-2016</td>
								<td>09:00</td>
								<td>11:00</td>
								<td>Lab</td>
								<td>-</td>
								<td><button class='btn btn-default'>Edit</button><button class='btn btn-default'>Delete</button></td>
							</tr>

							<tr>
							    <td>Mengoreksi</td>
								<td>17-11-2016</td>
								<td>12:00</td>
								<td>14:00</td>
								<td>Tugas 1</td>
								<td>Ditolak</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>	
			</div>
			</div>
		</div>

		<footer class="container-fluid text-center">
			<p>Kelompok B-04</p>
		</footer>		
	</body>
</html>