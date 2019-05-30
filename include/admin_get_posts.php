<?php
	@$id = $_GET['dfm'];
	$upit_brisi_posts = "DELETE FROM postovi WHERE id_post = ".$id;
	mysqli_query($conn, $upit_brisi_posts);
	echo("<div class='table-wrapper'>");
	echo("<div class='wrapper-paging'>
          <ul>
            <li><a class='paging-back'>&lt;</a></li>
            <li><a class='paging-this'><strong>0</strong> of <span>x</span></a></li>
            <li><a class='paging-next'>&gt;</a></li>
          </ul>
        </div>");
	echo("<form method='POST' action='admin.php?p=0' enctype='multipart/form-data'>");
		echo("<table class='table table-bordered'>");
		echo("<thead>");
		$sviPostovi = "SELECT * FROM postovi ORDER BY datum DESC";
		$rezPostovi = mysqli_query($conn, $sviPostovi);
		if(mysqli_num_rows($rezPostovi) > 0)
		{
			echo("<tr>");
				echo("<th>Autor</th>");
				echo("<th>Naslov</th>");
				echo("<th>Datum</th>");
				echo("<th>Slika</th>");
				echo("<th>Brisanje</th>");
				echo("<th>Menjanje</th>");
			echo("</tr>");
			echo("</thead>");
			echo("<tbody>");
			while($redPostovi = mysqli_fetch_array($rezPostovi))
			{
			echo("<tr>");
				echo("<td>".$redPostovi['autor']."</td>");
				echo("<td>".$redPostovi['naslov']."</td>");
				echo("<td>".$redPostovi['datum']."</td>");
				echo("<td><img src='".$redPostovi['slika']."' width='200px' height='100px'/></td>");
				echo("<td><a href='admin.php?p=0&dfm=".$redPostovi['id_post']."'>Brisi</a></td>");
				echo("<td><a href='admin.php?v=".$redPostovi['id_post']."'>Menjaj</a></td>");
			echo("</tr>");
			}
			echo("</tbody>");
		}
		echo("</table>");
	echo("</form>");
	echo("</div>");
	echo("<a class='aTag' href='admin.php?p=3'>Insert</a>");
?>