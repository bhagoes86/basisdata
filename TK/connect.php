<?php
function connectDB() {
  // initialize connection
  $conn =  pg_connect("host=localhost dbname=postgres user=postgres password=postgres");
  if (!$conn) {
    die("Connection failed: ".pg_last_error());
  }

  return $conn;
}?>
