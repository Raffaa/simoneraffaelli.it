<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //REPORT_ALL for dubug only

define("HOST", "sql.simoneraffaelli.it");
define("USER", "simonera33517");
define("PASSWORD", "123456789");
define("DATABASE", "simonera33517");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}
$mysqli->set_charset("utf8");
?>
