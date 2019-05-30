<?php
	if(isset($_REQUEST['btnLogin']))
	{		
		$user = trim($_REQUEST['user']);
		$pass = md5(trim($_REQUEST['pass']));
		
		$upit = "SELECT * FROM korisnici k INNER JOIN uloge u ON k.id_uloga = u.id_uloga
				WHERE korisnicko_ime = '$user' AND lozinka = '$pass'";
		$rez = mysqli_query($conn, $upit);
		
		if(mysqli_num_rows($rez) == 0)
		{
			$greske[] = "Greska pri logovanju";
		}
		else
		{
			$r = mysqli_fetch_array($rez);
			$_SESSION['idU'] = $r['id_uloga'];
			$_SESSION['uloga'] = $r['naziv'];
			$_SESSION['korIme'] = $r['korisnicko_ime'];
		}
	}
	
	if(isset($_REQUEST['btnRegister']))
	{
		$user = $_REQUEST['username'];
		$fName = $_REQUEST['first_name'];
		$lName = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$pass = md5($_REQUEST['pass']);
		$coPass = md5($_REQUEST['rePass']);
		
		$reUser = "/^[\w\d\s]{2,20}$/";
		$refName = "/^[A-z]{3,20}$/";
		$relName = "/^[A-z]{4,25}$/";
		$reEmail = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
		$rePass = "/^[\w\d\s]{3,15}$/";
		
		if(!preg_match($reUser, $user))
		{
			$greske[] = "Korisnicko ime nije validno";
		}
		if(!preg_match($refName, $fName))
		{
			$greske[] = "Ime nije validno";
		}
		if(!preg_match($relName, $lName))
		{
			$greske[] = "Prezime nije validno";
		}
		if(!preg_match($reEmail, $email))
		{
			$greske[] = "E-mail nije validan";
		}
		if(!preg_match($rePass, $_REQUEST['pass']))
		{
			$greske[] = "Lozinka nije validna";
		}
		if($pass != $coPass)
		{
			$greske[] = "Lozinke nisu iste";
		}
		if(count($greske) == 0)
		{
			$upit_user = "SELECT * FROM korisnici WHERE korisnicko_ime = '$user';";
			$query = mysqli_query($conn, $upit_user);
			if(mysqli_num_rows($query)!=0)
			{
				$greske[] = "Mora biti jedinstven username";
			}
			else
			{
				$upit_upis = "INSERT INTO korisnici VALUES('', '$user', '$fName', '$lName', '$email', '$pass', 2)";
				$rez = mysqli_query($conn, $upit_upis);
				if($rez)
				{
					header('Location: index.php');
				}
			}	
		}
	}
?>