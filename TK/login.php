<?php
    require "connect.php";
    session_start();
    if(isset($_SESSION["username"])){
        header("Location:lihat_lowongan.php");        
    }

    $resp = "";

    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username;
        echo $password;
        if (loginMhs($username, $password)) {
            $resp = "Login successful";
            $_SESSION["username"] = $username;
            $search = searchMhs($username);
            $_SESSION["npm"] = $search["npm"];
	        $_SESSION["nama"] = $search["nama"];
            $_SESSION["email"] = $search["email"];
              
             header("Location:lihat_lowongan.php");
            exit();
        } else {
           $resp = "<br><div class=\"alert alert-danger fade in\" style = 'text-align: center;'>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                        Login Failed 
                    </div>";
        }
         if (loginDosen($username, $password)) {
            $resp = "Login successful";
           
	        $search = searchDosen($username);
            $_SESSION["nip"] = $search["nip"];
            $_SESSION["username"] = $username; 
            $_SESSION["nama"] = $search["nama"];
	             header("Location:lihat_lowongan.php");
	            exit();
	        } else {
	           $resp = "<br><div class=\"alert alert-danger fade in\" style = 'text-align: center;'>
	                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
	                        Login Failed 
	                    </div>";
	        }
    }

    function searchMhs($user) {
        $conn = connectDB();
        $sql = "SELECT nama, npm, email FROM SIASISTEN.mahasiswa WHERE username = '$user'";
        $resultRole = pg_query($conn, $sql);
        $row = pg_fetch_assoc($resultRole);
        pg_close($conn);
        return $row;
    }

    function searchDosen($user) {
        $conn = connectDB();
        $sql = "SELECT nama, nip FROM SIASISTEN.dosen WHERE username = '$user'";
        $resultRole = pg_query($conn, $sql);
        $row = pg_fetch_assoc($resultRole);
        pg_close($conn);
        return $row;
    }

    function loginMhs($user, $pass) {
        $conn = connectDB();
        $sql = "SELECT username, password FROM SIASISTEN.mahasiswa WHERE username = '$user' AND password = '$pass'";
        $resultUser = pg_query($conn, $sql);
     
        if (pg_num_rows($resultUser) == 0) {
            pg_close($conn);
            return false;
        } else {
            $row = pg_fetch_assoc($resultUser);
            if ($row["username"] !== $user || $row["password"] !== $pass) {
                pg_close($conn);
                return false;
            }
        }
        pg_close($conn);
        return true;
    }

     function loginDosen($user, $pass) {
        $conn = connectDB();
        $sql = "SELECT username, password FROM SIASISTEN.dosen WHERE username = '$user' AND password = '$pass'";
        $resultUser = pg_query($conn, $sql);
     
        if (pg_num_rows($resultUser) == 0) {
            pg_close($conn);
            return false;
        } else {
            $row = pg_fetch_assoc($resultUser);
            if ($row["username"] !== $user || $row["password"] !== $pass) {
                pg_close($conn);
                return false;
            }
        }
        pg_close($conn);
        return true;
    }
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
				<li class="active"><a href="#">Login</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
			  </ul>
			</div>
		  </div>
		</nav>
  
		<div class="container-fluid">    
			
			<div class="panel center"> 
				<h1>Log In</h1>
				<div class="midit">
					<table class="table table-bordered table-hover">
						 <form method="post">
						  <fieldset>
						    <input type="text" name="username" placeholder="username or email" required><br>
						    <br>
						    <input type="text" name="password" placeholder="password" required><br>
                            <br>
						    <input type="submit" value="Log In">
                            <?php echo $resp; ?>
						  </fieldset>
						</form> 
					</table>
				</div>	
			</div>
		</div>

		<footer class="container-fluid text-center">
			<p>Kelompok B-04</p>
		</footer>		
	</body>
</html>
