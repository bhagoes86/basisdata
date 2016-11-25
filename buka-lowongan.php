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
				<li><a href="#">Menu 1</a></li>
				<li><a href="#">Menu 2</a></li>
				<li><a href="#">Menu 3</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"> Login</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
  
		<div class="container-fluid">    
			
			<div class="panel center"> 
				<h1>Tambah Lowongan</h1>
				<form class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Term</label>
						<div class="col-sm-10">
							<input class="form-control" id="disabledInput" type="text" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Mata Kuliah</label>
						<div class="col-sm-10">
							<select class="form-control" id="sel1">
								<option>Matkul 1</option>
								<option>Matkul 2</option>
								<option>Matkul 3</option>
								<option>Matkul 4</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Status</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="optradio">Buka</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio">Tutup</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Syarat tambahan</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Daftar pengajar</label>
						<div class="col-sm-10">
							<a href="#" class="list-group-item">Dosen 1</a>
							<a href="#" class="list-group-item">Dosen 2</a>
							<a href="#" class="list-group-item">Dosen 3</a>
						</div>
					</div>
				</form>
			</div>
		</div>

		<footer class="container-fluid text-center">
			<p>Kelompok B-04</p>
		</footer>		
	</body>
</html>