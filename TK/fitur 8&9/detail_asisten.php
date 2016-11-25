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
				<li><a href="#">Lihat Pelamar</a></li>
				<li><a href="#">Lowongan</a></li>
				<li><a href="#">Lihat Log</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
			  	<li><a href="#"> Diniwati</a></li>
				<li><a href="#"> Logout</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
  
		<div class="container-fluid">    
			<div class="panel center"> 
					<h1 style = 'text-align: center;'>Log Asistensi Per Mata Kuliah</h1>
				<div class="midit">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
							<th style='background-color: #b3b3b3; color:black;'>Term</th>
							<td>
								<select class="form-control" id="term">
		      					<option>2, 2016</option>
								<option>1, 2016</option>
								<option>3, 2015</option>
								<option>2, 2015</option>
								<option>1, 2015</option>
								<option>3, 2014</option>
								<option>2, 2014</option>
								<option>1, 2014</option>
								</select>
							</td>
							</tr>
							<tr>
   								<th style='background-color: #b3b3b3; color:black;'>Mata Kuliah</th>
   					 			<td>IKI10200 Dasar - Dasar Pemrograman </td>
 							</tr>
 							<tr>
   								<th style='background-color: #b3b3b3; color:black;'>Nama</th>
    							<td>Bagus Putra Handoko</td>
  							</tr>
						</tbody>
					</table>

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>NPM</th>
								<th>Nama</th>
								<th>Durasi</th>
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
								<td>1406543702</td>
								<td>Meisielia</td>
							    <td>2</td>
							    <td>Mengoreksi</td>
								<td>12-09-2016</td>
								<td>09:00</td>
								<td>11:00</td>
								<td>Tugas 2</td>
								<td>disetujui</td>
								<td><button class='btn btn-default'>Batal</button></td>
							</tr>

							<tr>
								<td>1406543705</td>
								<td>Fransky Avianto</td>
							    <td>3</td>
							    <td>Asistensi</td>
								<td>10-11-2016</td>
								<td>13:00</td>
								<td>15:00</td>
								<td>Tugas 2</td>
								<td>disetujui</td>
								<td><button class='btn btn-default'>Batal</button></td>
							</tr>

							<tr>
								<td>1406543716</td>
								<td>Natalia Devina</td>
							    <td>Mengawas</td>
							    <td>2</td>
								<td>22-10-2016</td>
								<td>12:00</td>
								<td>14:00</td>
								<td>Lab</td>
								<td>ditolak</td>
								<td><button class='btn btn-default'>Batal</button></td>
							</tr>

							<tr>
								<td>1406543723</td>
								<td>Maria Kristina</td>
							    <td>2</td>
							    <td>Mengoreksi</td>
								<td>05-11-2016</td>
								<td>10:00</td>
								<td>12:00</td>
								<td>Tugas 2</td>
								<td>Di Laporkan</td>
								<td><button class='btn btn-default'>Setujui</button><button class='btn btn-default'>Tolak</button></td>
							</tr>

							<tr>
								<td>1406543731</td>
								<td>Kathleen Harvey</td>
							    <td>3</td>
							    <td>Mengawas</td>
								<td>17-10-2016</td>
								<td>08:00</td>
								<td>11:00</td>
								<td>UAS</td>
								<td>Di Laporkan</td>
								<td><button class='btn btn-default'>Setujui</button><button class='btn btn-default'>Tolak</button></td>
							</tr>


							<tr>
								<td>1406543740</td>
								<td>Philip White</td>
							    <td>2</td>
							    <td>Asistensi</td>
								<td>30-11-2016</td>
								<td>15:00</td>
								<td>17:00</td>
								<td>Tugas 1</td>
								<td>ditolak</td>
								<td><button class='btn btn-default'>Batal</button></td>
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