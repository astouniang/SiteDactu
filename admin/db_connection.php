<?php 
	session_start();
	$dbconnection = mysqli_connect('localhost', 'root', '', 'siteDactu');
	mysqli_set_charset($dbconnection, "utf8");
	if (!$dbconnection)
	{
		die("Could not connect: " . mysqli_connect_error());
	}
 ?>