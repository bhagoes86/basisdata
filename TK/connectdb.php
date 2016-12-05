<?php
	function connect() {	
	$dbhost = "localhost";
	$dbuser = "postgres";
	$dbpass = "1";

	$condb = pg_connect("host=$dbhost port=5432 dbname=postgres user=$dbuser password=$dbpass");
	if (!$condb) {
		die('Kaga bisa nyambung: '.pg_error($con));
	}
	pg_query($condb, "set search_path to 'siasisten'");

	return $condb;
	}
?>