<?php
	$db["engi"] = "mysql";
	$db["host"] = $_SERVER['HTTP_HOST'];
	$db["user"] = "root";
	$db["pass"] = "";
	$db["dbes"] = "pengaduan";


	$connection = new mysqli($db["host"], $db["user"], $db["pass"], $db["dbes"]) or die ('Error connecting to database');
?>