<?php 
if(isset($_GET['value'])){
	 $value=$_REQUEST['value'];
	 include('konekcija.inc');
	 if($value==1){
	  $upit1="select * from postovi order by datum asc";
	  $rez1=mysqli_query($conn,$upit1);
	  while($niz1=mysqli_fetch_array($rez1)){
		include('include/sort_post.php');
	  }
	 } 
	 elseif($value==2){
		 
	  $upit2="select * from postovi order by datum desc";
	   $rez2=mysqli_query($conn,$upit2);
	  while($niz2=mysqli_fetch_array($rez2)){
		  include('include/sort_post2.php');
	  }
	 }	 
	 else{		
		$upit3="select * from postovi order by autor";
		   $rez3=mysqli_query($conn,$upit3);
		  while($niz3=mysqli_fetch_array($rez3)){
			  include('include/sort_post3.php');
	  }
		 }
	 }
?>