<?php
		echo("<form method='POST' action='admin.php?p=3' enctype='multipart/form-data'>");
		echo("<table class='table table-bordered'>");
		echo("<tr>");
			echo("<th>Autor</th>");
			echo("<td><input type='text' name='postAutor' /></td>");
		echo("</tr>");

		echo("<tr>");
			echo("<th>Naslov</th>");
			echo("<td><input type='text' name='postNaslov' /></td>");
		echo("</tr>");
		
		echo("<tr>");
			echo("<th>Opis</th>");
			echo("<td><textarea name='postOpis'></textarea></td>");
		echo("</tr>");
		
		echo("<tr>");
			echo("<th>Datum</th>");
			echo("<td><input type='datetime-local' name='postDatum' /></td>");
		echo("</tr>");
		
		echo("<tr>");
			echo("<th>Slika</th>");
			echo("<td><input type='file' name='postSlika' /></td>");
		echo("<tr>");
			
		echo("<tr>");
			echo("<td><input type='submit' name='dodajPost' value='Dodaj post' /></td>");
			echo("<td><input type='reset' value='Ponisti' /></td>");
		echo("</tr>");
		echo("</table>");
		echo("</form>");
		
		if(isset($_REQUEST['dodajPost']))
				{
					$autor = $_REQUEST['postAutor'];
					$datum = $_REQUEST['postDatum'];
					$naslov = $_REQUEST['postNaslov'];
					$opis = $_REQUEST['postOpis'];
					
					@$imeSlike = $_FILES['postSlika']['name'];
					@$tmpPozSlike = $_FILES['postSlika']['tmp_name'];
					$finalPic = "images/".$imeSlike;

					$greska_dodaj = false;
					
					if(strlen($autor) == 0)
						$greska_dodaj = true;
					if(strlen($datum) == 0)
						$greska_dodaj = true;
					if(strlen($naslov) == 0)
						$greska_dodaj = true;
					if(strlen($opis) == 0)
						$greska_dodaj = true;
					
					if(!$greska_dodaj)
					{
						move_uploaded_file($tmpPozSlike, "images/".$imeSlike);
						
						$upit_dodaj_post = "INSERT INTO postovi VALUES('', '".$finalPic."', '".$autor."', '".$datum."', '".$naslov."', '".$opis."')";
						$rez_insert_post = mysqli_query($conn, $upit_dodaj_post);
						if($rez_insert_post)
							echo("<div class='alert alert-success' style='text-align: center'>
									<strong>Uspesno ste dodali post ciji je autor".$autor."</strong>
								</div>");
						else
							echo("<div class='alert alert-danger' style='text-align: center'>
									<strong>Niste uspeli da dodate post!</strong>
								</div>");

					}else echo("<div class='alert alert-warning' style='text-align: center'>
									<strong>Niste popunili neko polje.</strong>
								</div>");
				}
?>