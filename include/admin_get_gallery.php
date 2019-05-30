<?php
	@$id = $_GET['dtm'];
	$upit_brisi_slike = "DELETE FROM galerija WHERE id_galerija = ".$id;
	mysqli_query($conn, $upit_brisi_slike);
	echo("<div class='table-wrapper'>");
	echo("<div class='wrapper-paging'>
          <ul>
            <li><a class='paging-back'>&lt;</a></li>
            <li><a class='paging-this'><strong>0</strong> of <span>x</span></a></li>
            <li><a class='paging-next'>&gt;</a></li>
          </ul>
        </div>");
	echo("<form method='POST' action='admin.php?p=2' enctype='multipart/form-data'>");
		echo("<table class='table table-bordered'>");
		echo("<thead>");
		$sveSlike = "SELECT * FROM galerija ORDER BY id_galerija ASC";
		$rezSlike = mysqli_query($conn, $sveSlike);
		if(mysqli_num_rows($rezSlike) > 0)
		{
			echo("<tr>");
				echo("<th>Id</th>");
				echo("<th>Alt</th>");
				echo("<th>Slika</th>");
				echo("<th>Brisanje</th>");
				echo("<th>Menjanje</th>");
			echo("</tr>");
			echo("</thead>");
			echo("<tbody>");
			while($redSlike = mysqli_fetch_array($rezSlike))
			{
			echo("<tr>");
				echo("<td>".$redSlike['id_galerija']."</td>");
				echo("<td>".$redSlike['alt']."</td>");
				echo("<td><img src='".$redSlike['putanja']."' width='200px' height='100px'/></td>");
				echo("<td><a href='admin.php?p=2&dtm=".$redSlike['id_galerija']."'>Brisi</a></td>");
				echo("<td><a href='admin.php?g=".$redSlike['id_galerija']."'>Menjaj</a></td>");
			echo("</tr>");
			}
			echo("</tbody>");
		}
		echo("</table>");
	echo("</form>");
	echo("</div>");
	echo("<a class='aTag' href='admin.php?p=5'>Insert</a>");
?>