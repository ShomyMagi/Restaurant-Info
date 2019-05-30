<?php
		echo("<form method='POST' action='admin.php?p=5' enctype='multipart/form-data'>");
		echo("<table class='table table-bordered'>");
		echo("<tr>");
			echo("<th>Alt</th>");
			echo("<td><input type='text' name='postAlt' /></td>");
		echo("</tr>");
		echo("<tr>");
			echo("<th>Slika</th>");
			echo("<td><input type='file' name='postSlika' /></td>");
		echo("<tr>");
			
		echo("<tr>");
			echo("<td><input type='submit' name='dodajSliku' value='Dodaj sliku' /></td>");
			echo("<td><input type='reset' value='Ponisti' /></td>");
		echo("</tr>");
		echo("</table>");
		echo("</form>");
		
		if(isset($_REQUEST['dodajSliku']))
				{
					$alt = $_REQUEST['postAlt'];
					
					@$imeSlike = $_FILES['postSlika']['name'];
					@$tmpPozSlike = $_FILES['postSlika']['tmp_name'];
					$finalPic = "images/img/".$imeSlike;

					$greska_dodaj = false;
					
					if(strlen($alt) == 0)
						$greska_dodaj = true;
					
					if(!$greska_dodaj)
					{
						move_uploaded_file($tmpPozSlike, "images/img/".$imeSlike);
						
						$upit_dodaj_sliku = "INSERT INTO galerija VALUES('', '".$finalPic."', '".$alt."')";
						$rez_insert_slika = mysqli_query($conn, $upit_dodaj_sliku);
						if($rez_insert_slika)
							echo("<div class='alert alert-success' style='text-align: center'>
									<strong>Uspesno ste dodali sliku</strong>
								</div>");
						else
							echo("<div class='alert alert-danger' style='text-align: center'>
									<strong>Niste uspeli da dodate sliku!</strong>
								</div>");

					}else echo("<div class='alert alert-warning' style='text-align: center'>
									<strong>Niste popunili neko polje.</strong>
								</div>");
				}
?>