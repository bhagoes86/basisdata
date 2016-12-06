<?php
	// session_start();
	// if(!isset($_SESSION["userlogin"])){
	// 	header("Location: login.php");
	// }
	require 'connect.php';

	$conn = connectDB();

	//$user = $_SESSION["userlogin"];

	//$ipk = pg_escape_string($conn, $_POST('IPK'));
	//$sks = pg_escape_string($conn, $_POST('SKS'));

	$ipk = ($_POST['IPK']);
	$sks = ($_POST['SKS']);

	$npm = 1406543700;

	$idlowongan = ($_POST['idlowongan']);

	$idlamaran = pg_fetch_row(pg_query($conn, "select idlamaran from SIASISTEN.lamaran order by idlamaran desc limit 1;"))[0]+1;

	$nipdosen = "SELECT SIASISTEN.lowongan.nipdosenpembuka FROM SIASISTEN.lowongan WHERE SIASISTEN.lowongan.idlowongan = '$idlowongan'";
	$DosenTemp = pg_query($conn, $nipdosen);
	$row = pg_fetch_row($DosenTemp);

	$nip = $row[0];


	$sql = "INSERT INTO SIASISTEN.lamaran (idlamaran, npm, idlowongan, id_st_lamaran, ipk, jumlahsks, nip) values ('$idlamaran' , '$npm', '$idlowongan', 1, '$ipk', '$sks', '$nip')";

	if (pg_query($conn, $sql)){
		echo "masuk";
	}
	else
		echo "engga";
?>