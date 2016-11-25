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
				<h1 style = 'text-align: center;'>Log Asistensi Per Mata Kuliah</h1>
					<div class="midit">
						<form>
							<fieldset class="form-group">
						    	<label for="kategori">Kategori</label>
						    	<select class="form-control" id="nama">
						      		<option>Asistensi</option>
							      	<option>Persiapan asistensi</option>
							      	<option>Membuat soal</option>
							      	<option>Rapat</option>
							      	<option>Sit in kelas</option>
							      	<option>Mengawas</option>
							      	<option>Mengoreksi</option>
						    	</select>
							</fieldset>
							<fieldset class="form-group">
							   	<label for="tanggal">Tanggal</label>
							   	<input type='date' class="form-control" name="date"/>
							</fieldset>
							<fieldset class="form-group">
							  	<label for="jam_mulai">Jam mulai</label>
							    <input type="text" class="form-control" id="jam_mulai" placeholder="hh:mm:ss">
							</fieldset>
							<fieldset class="form-group">
							  	<label for="jam_selesai">Jam selesai</label>
							    <input type="text" class="form-control" id="jam_selesai" placeholder="hh:mm:ss">
							</fieldset>
							<fieldset class="form-group">
							    <label for="descripsiKerja">Descripsi Kerja</label>
							    <textarea class="form-control" id="descripsiKerja" rows="3"></textarea>
							</fieldset>
							<button type="submit" class='btn btn-default' style='background-color: #555; color:white;'>Simpan</button>
							<button type="button" class='btn btn-default' style='background-color: #555; color:white;'>Batal</button>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
					<p>Kelompok B-04</p>
				</footer>		
			</body>
		</html>