<?php
	@$id = $_GET['c'];
	echo("<form method='POST' action='admin.php?c=".$id."'>");
		echo("<table class='table table-bordered'>");
			echo("<tr>");
				echo("<th>Korisnicko ime</th>");
				echo("<th>Ime</th>");
				echo("<th>Prezime</th>");
				echo("<th>Email</th>");
				echo("<th>Lozinka</th>");
			echo("</tr>");
			
				$upit_update = "SELECT * FROM korisnici WHERE id_korisnik=$id";
				$rez_update = mysqli_query($conn, $upit_update);
				$red_update = mysqli_fetch_array($rez_update);
					echo("<tr>");
						echo("<td>
							<input type='text' name='korIme' value='".$red_update['korisnicko_ime']."' />
							</td>");
						echo("<td>
							<input type='text' name='ime' value='".$red_update['ime']."' />
						</td>");
						echo("<td>
							<input type='text' name='prezime' value='".$red_update['prezime']."' />
						</td>");
						echo("<td>
							<input type='text' name='email' value='".$red_update['email']."' />
						</td>");
						echo("<td>
							<input type='text' name='lozinka'  value='".$red_update['lozinka']."' />
						</td>");
					echo("</tr>");		
			echo("<tr>");
				echo("<td colspan='5' align='center'><input type='submit' value='Sacuvaj promene' name='sacuvajKorisnike'></td>");
			echo("</tr>");						
		echo("</table>");
		echo("</form>");
		
		
		if(isset($_REQUEST['sacuvajKorisnike']))
		{
			$korisnicko_ime = $_REQUEST['korIme'];
			$ime = $_REQUEST['ime'];
			$prezime = $_REQUEST['prezime'];
			$email = $_REQUEST['email'];
			$lozinka = md5($_REQUEST['lozinka']);
			
			$unapredi = "UPDATE korisnici SET korisnicko_ime='".$korisnicko_ime."', ime='".$ime."', prezime='".$prezime."', email='".$email."', lozinka='".$lozinka."' WHERE id_korisnik=".$id;
			$r= mysqli_query($conn, $unapredi);
			if($r)
				echo("<div class='alert alert-success' style='text-align: center'>
							<strong>Uspesno ste promenili korisnika $ime $prezime<br/></strong>
						</div>");
			else
				echo("<div class='alert alert-danger' style='text-align: center'>
							<strong>Niste uspeli da promenite korisnika $ime $prezime<br/></strong>
						</div>");
		}
?>