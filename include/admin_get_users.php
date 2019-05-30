<?php
	@$id = $_GET['drm'];
	$upit_brisi_user = "DELETE FROM korisnici WHERE id_korisnik = ".$id;
	mysqli_query($conn, $upit_brisi_user);
	echo("<div class='table-wrapper'>");
	echo("<div class='wrapper-paging'>
          <ul>
            <li><a class='paging-back'>&lt;</a></li>
            <li><a class='paging-this'><strong>0</strong> of <span>x</span></a></li>
            <li><a class='paging-next'>&gt;</a></li>
          </ul>
        </div>");
	echo("<form method='POST' action='admin.php?p=1'>");
		echo("<table class='table table-bordered'>");
		echo("<thead>");
		$sviKorisnici = "SELECT * FROM korisnici ORDER BY korisnicko_ime ASC";
		$rezKorisnici = mysqli_query($conn, $sviKorisnici);
		if(mysqli_num_rows($rezKorisnici) > 0)
		{
			echo("<tr>");
				echo("<th>Korisnicko ime</th>");
				echo("<th>Ime</th>");
				echo("<th>Prezime</th>");
				echo("<th>Email</th>");
				echo("<th>Lozinka</th>");
				echo("<th>Brisanje</th>");
				echo("<th>Menjanje</th>");
			echo("</tr>");
			echo("</thead>");
			echo("<tbody>");
			while($redKorisnici = mysqli_fetch_array($rezKorisnici))
			{
			echo("<tr>");
				echo("<td>".$redKorisnici['korisnicko_ime']."</td>");
				echo("<td>".$redKorisnici['ime']."</td>");
				echo("<td>".$redKorisnici['prezime']."</td>");
				echo("<td>".$redKorisnici['email']."</td>");
				echo("<td>".$redKorisnici['lozinka']."</td>");
				echo("<td><a href='admin.php?p=1&drm=".$redKorisnici['id_korisnik']."'>Brisi</a></td>");
				echo("<td><a href='admin.php?c=".$redKorisnici['id_korisnik']."'>Menjaj</a></td>");
			echo("</tr>");
			}
			echo("</tbody>");
		}
		echo("</table>");
	echo("</form>");
	echo("</div>");
	echo("<a class='aTag' href='admin.php?p=4'>Insert</a>");
?>