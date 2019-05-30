<?php
	if(isset($_SESSION['idU']))
	{
		$upit_nav = "SELECT * FROM navigacija;";
	}
	else
	{
		$upit_nav = "SELECT * FROM navigacija WHERE id_navigacija NOT IN (4)";
	}
	$rez_nav = mysqli_query($conn, $upit_nav);
	
	echo '<ul class="navbar-nav" id="yummy-nav">';
	while($n = mysqli_fetch_array($rez_nav))
	{
		echo  '<li class="nav-item"> 
					<a class="nav-link" href="'.$n["putanja"].'">'.$n["naziv"].'</a>
			  </li>';
	}
	echo "</ul>";
?>