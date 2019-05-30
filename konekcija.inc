<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	
	$greske = array();
	
	$conn = mysqli_connect($server, $user, $pass);
	$baza = mysqli_select_db($conn, "php2_sajt1");
	
	if(!$conn)
	{
		$greske[] = "Neuspela konekcija sa serverom baze podataka".mysqli_error();
	}
	else
	{
		if(!$baza)
		{
			$greske[] = "Greska u odabiru baze podataka".mysqli_error();
		}
	}
	
	mysqli_set_charset($conn, "utf8");
?>