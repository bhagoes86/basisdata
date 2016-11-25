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
					<thead>
							<tr>
							<th>No</th>
					        <th>Mata Kuliah</th>
					        <th>Semester</th>
					        <th>Tahun Ajaran</th>
					        <th>Dosen</th>
					        <th>Log Asisten</thh>
							</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>IKI10200 - Dasar-Dasar Pemrogaman</td>
							<td>1</td>
							<td>2016/2017</td>
							<td>Abdul Hadi Ismail, Diniwati</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>IKI10200 - Dasar-Dasar Pemrogaman</td>
							<td>2</td>
							<td>2015/2016</td>
							<td>Diniwati, Imelda Dharma</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>IKI20201 - Perancangan&Pemrograman Web</td>
							<td>1</td>
							<td>2014/2015</td>
							<td>Diniwati, David Widjaja</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>IKI10400 - Struktur Data&Algoritma</td>
							<td>1</td>
							<td>2014/2015</td>
							<td>Diniwati</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>IKI10400 - Struktur Data&Algoritma</td>
							<td>2</td>
							<td>2014/2015</td>
							<td>Aaron Thompson, Diniwati</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
						</tr>
						<tr>
							<td>6</td>
							<td>IKI20700 - Basis Data</td>
							<td>1</td>
							<td>2014/2015</td>
							<td>Pamela Kim, Diniwati</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
						</tr>
						<tr>
							<td>7</td>
							<td>IKI20700 - Basis Data</td>
							<td>2</td>
							<td>2014/2015</td>
							<td>Diniwati John Boyd</td>
							<td><a href='lihat_asisten.php'> Lihat </a></td>
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