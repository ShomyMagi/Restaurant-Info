<?php
	@$id_p = $_GET['v'];
	echo("<form method='POST' action='admin.php?v=".$id_p."' enctype='multipart/form-data'>");
	echo("<table class='table table-bordered'>");
		echo("<tr>");
			echo("<th>Autor</th>");
			echo("<th>Datum</th>");
			echo("<th>Naslov</th>");
			echo("<th>Opis</th>");
			echo("<th>Slika</th>");
		echo("</tr>");

			$update_upit = "SELECT * FROM postovi WHERE id_post=$id_p";
			$rez_upit = mysqli_query($conn, $update_upit);
			$red_upit = mysqli_fetch_array($rez_upit);
				echo("<tr>");
					echo("<td>
						<input type='text' size='6' name='autorUp' value='".$red_upit['autor']."' />
						</td>");
					echo("<td>
						<input type='text' size='25' name='datumUp' value='".$red_upit['datum']."' />
						</td>");
					echo("<td>
						<input type='text' size='25' name='naslovUp' value='".$red_upit['naslov']."' />
						</td>");
					echo("<td>
						<input type='text' size='25' name='opisUp' value='".$red_upit['opis']."' />
						</td>");
					echo("<td>
						<img src='".$red_upit['slika']."' width='150px' height='100px' />
						<input type='file' name='slikeUp' />
						</td>");
				echo("</tr>");
		echo("<tr>");
			echo("<td colspan='5' align='center'><input type='submit' value='Sacuvaj promene' name='sacuvajPostove'></td>");
		echo("</tr>");						
	echo("</table>");
	echo("</form>");
	
	if(isset($_REQUEST['sacuvajPostove']))
	{
		$autorUp = $_REQUEST['autorUp'];
		$naslovUp = $_REQUEST['naslovUp'];
		$opisUp = $_REQUEST['opisUp'];
		$datumUp = $_REQUEST['datumUp'];
		
		@$imeSlike1 = $_FILES['slikeUp']['name'];
		@$tmp_slike1 = $_FILES['slikeUp']['tmp_name'];
		$putanjaSlike = "images/".$imeSlike1;
		
		if(empty($imeSlike1))
		{		
			$unapredi_post = "UPDATE postovi SET autor='".$autorUp."', datum='".$datumUp."', naslov='".$naslovUp."', opis='".$opisUp."' WHERE id_post=$id_p";
			$re = mysqli_query($conn, $unapredi_post);
			if($re)
				echo("<div class='alert alert-success' style='text-align: center'>
							<strong>Uspesno ste promenili post ciji je autor $autorUp<br/></strong>
						</div>");
			else
				echo("<div class='alert alert-danger' style='text-align: center'>
							<strong>Niste uspeli da promenite post ciji je autor $autorUp<br/></strong>
						</div>");
		}
		elseif(move_uploaded_file($tmp_slike1, $putanjaSlike))
		{

				$unapredi_post1 = "UPDATE postovi SET slika='".$putanjaSlike."', autor='".$autorUp."', datum='".$datumUp."', naslov='".$naslovUp."', opis='".$opisUp."' WHERE id_post=$id_p";
				$re1 = mysqli_query($conn, $unapredi_post1);
				if($re1)
					echo("<div class='alert alert-success' style='text-align: center'>
								<strong>Uspesno ste promenili post ciji je autor $autorUp<br/></strong>
							</div>");
				else
					echo("<div class='alert alert-danger' style='text-align: center'>
								<strong>Niste uspeli da promenite post ciji je autor $autorUp<br/></strong>
							</div>");	

		}
	}
?>