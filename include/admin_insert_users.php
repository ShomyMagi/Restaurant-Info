<?php
		echo("<form method='POST' action='admin.php?p=4'>");
		echo("<table class='table table-bordered'>");
		echo("<tr>");
			echo("<th>Korisnicko ime:</th>");
			echo("<td><input type='text' name='korisnickoIme' /></td>");
		echo("</tr>");

		echo("<tr>");
			echo("<th>Ime:</th>");
			echo("<td><input type='text' name='korisnikIme' /></td>");
		echo("</tr>");
		
		echo("<tr>");
			echo("<th>Prezime:</th>");
			echo("<td><input type='text' name='korisnikPrezime' /></td>");
		echo("</tr>");
		
		echo("<tr>");
			echo("<th>Email:</th>");
			echo("<td><input type='email' name='korisnikEmail' /></td>");
		echo("</tr>");
		
		echo("<tr>");
			echo("<th>Lozinka:</th>");
			echo("<td><input type='password' name='korisnikLozinka' /></td>");
		echo("<tr>");
			
		echo("<tr>");
			echo("<td><input type='submit' name='dodajKor' value='Dodaj korisnika' /></td>");
			echo("<td><input type='reset' value='Ponisti' /></td>");
		echo("</tr>");
		echo("</table>");
		echo("</form>");
		
		if(isset($_REQUEST['dodajKor']))
				{
					$korIme = $_REQUEST['korisnickoIme'];
					$ime = $_REQUEST['korisnikIme'];
					$prezime = $_REQUEST['korisnikPrezime'];
					$email = $_REQUEST['korisnikEmail'];
					$lozinka = md5($_REQUEST['korisnikLozinka']);

					$greska_dodaj = false;
					
					if(strlen($korIme) == 0)
						$greska_dodaj = true;
					if(strlen($ime) == 0)
						$greska_dodaj = true;
					if(strlen($prezime) == 0)
						$greska_dodaj = true;
					if(strlen($email) == 0)
						$greska_dodaj = true;
					if(strlen($lozinka) == 0)
						$greska_dodaj = true;
					
					if(!$greska_dodaj)
					{
						$upit_dodaj_korisnika = "INSERT INTO korisnici VALUES('', '".$korIme."', '".$ime."', '".$prezime."', '".$email."', '".$lozinka."', 2)";
						$rez_insert_user = mysqli_query($conn, $upit_dodaj_korisnika);
						if($rez_insert_user)
							echo("<div class='alert alert-success' style='text-align: center'>
									<strong>Uspesno ste dodali korisnika.".$korIme."</strong>
								</div>");
						else
							echo("<div class='alert alert-danger' style='text-align: center'>
									<strong>Niste uspeli da dodate korisnika!</strong>
								</div>");

					}else echo("<div class='alert alert-warning' style='text-align: center'>
									<strong>Niste popunili neko polje.</strong>
								</div>");
				}
?>