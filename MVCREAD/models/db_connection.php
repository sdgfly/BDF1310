<?php
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "BDF1310");
define("DB_HOST", "127.0.0.1");
define("DB_PORT", "8889")
//create databaase connection

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

//test to see if the database is connected
if (mysqli_connect_errno()) {
	die("Database Connection Failed." . 
		mysql_connect_error().
		" (" . mysqli_connect_errno() . ")"
		);
}
?>