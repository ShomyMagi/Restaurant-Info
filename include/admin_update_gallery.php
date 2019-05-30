<?php
	@$id_g = $_GET['g'];
	echo("<form method='POST' action='admin.php?g=".$id_g."' enctype='multipart/form-data'>");
	echo("<table class='table table-bordered'>");
		echo("<tr>");
			echo("<th>Alt</th>");
			echo("<th>Slika</th>");
		echo("</tr>");

			$update_upit = "SELECT * FROM galerija WHERE id_galerija=$id_g";
			$rez_upit = mysqli_query($conn, $update_upit);
			$red_upit = mysqli_fetch_array($rez_upit);
				echo("<tr>");
					echo("<td>
						<input type='text' size='6' name='altUp' value='".$red_upit['alt']."' />
						</td>");
					echo("<td>
						<img src='".$red_upit['putanja']."' width='150px' height='100px' />
						<input type='file' name='slikeUp' />
						</td>");
				echo("</tr>");
		echo("<tr>");
			echo("<td colspan='2' align='center'><input type='submit' value='Sacuvaj promene' name='sacuvajSlike'></td>");
		echo("</tr>");						
	echo("</table>");
	echo("</form>");
	
	if(isset($_REQUEST['sacuvajSlike']))
	{
		$altUp = $_REQUEST['altUp'];
		
		@$imeSlike2 = $_FILES['slikeUp']['name'];
		@$tmp_slike2 = $_FILES['slikeUp']['tmp_name'];
		$putanjaSlike = "images/img/".$imeSlike2;
		
		if(empty($imeSlike2))
		{		
			$unapredi_post = "UPDATE galerija SET alt='".$altUp."' WHERE id_galerija=$id_g";
			$rg = mysqli_query($conn, $unapredi_post);
			if($rg)
				echo("<div class='alert alert-success' style='text-align: center'>
							<strong>Uspesno ste promenili sliku</strong>
						</div>");
			else
				echo("<div class='alert alert-danger' style='text-align: center'>
							<strong>Niste uspeli da promenite sliku</strong>
						</div>");
		}
		elseif(move_uploaded_file($tmp_slike2, $putanjaSlike))
		{

				$unapredi_post1 = "UPDATE galerija SET putanja='".$putanjaSlike."', alt='".$altUp."' WHERE id_galerija=$id_g";
				$rg1 = mysqli_query($conn, $unapredi_post1);
				if($rg1)
					echo("<div class='alert alert-success' style='text-align: center'>
								<strong>Uspesno ste promenili sliku</strong>
							</div>");
				else
					echo("<div class='alert alert-danger' style='text-align: center'>
								<strong>Niste uspeli da promenite sliku</strong>
							</div>");	
		}
	}
?>