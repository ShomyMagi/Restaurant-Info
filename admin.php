<?php
	session_start();
	if(!isset($_SESSION['idU']))
	{
		header('Location: index.php');
	}
	include('konekcija.inc');
?>
<!DOCTYPE html>
<html lang="en">
<?php
	include('include/header.php');
	include('logReg.php');
?>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--  Login Register Area -->
				<?php
					include('include/logRegOut.php');
					if(count($greske) != 0)
					{	
						foreach($greske as $g)
						{														
							echo"<div class='alert alert-danger'>".$g."</div>";								
						}
					}
				?>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.php" class="yummy-logo">Yummy Blog</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <?php include('include/navigacija.php'); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/bg-img/admin.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Admin page</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->
		<div class='listAdmin'>
			<ul>
				<li><a href = "admin.php?p=0"><h2>Postovi</h2></a></li>
				<li><a href = "admin.php?p=1"><h2>Korisnici</h2></a></li>
				<li><a href = "admin.php?p=2"><h2>Galerija</h2></a></li>
			</ul>
		</div>
	<?php
		@$p = $_GET['p'];
		@$c = $_GET['c'];
		@$v = $_GET['v'];
		@$g = $_GET['g'];
		if(isset($p))
		{
			if($p == 0)
			{
				include('include/admin_get_posts.php');
			}
			else if($p == 1)
			{
				include('include/admin_get_users.php');
			}
			else if($p == 2)
			{
				include('include/admin_get_gallery.php');
			}
			else if($p == 3)
			{
				include('include/admin_insert_posts.php');
			}
			else if($p == 4)
			{
				include('include/admin_insert_users.php');
			}
			else if($p == 5)
			{
				include('include/admin_insert_gallery.php');
			}
		}
		else if(isset($c))
		{
			include('include/admin_update_users.php');	
		}
		else if(isset($v))
		{
			include('include/admin_update_posts.php');	
		}
		else if(isset($g))
		{
			include('include/admin_update_gallery.php');	
		}
		else
		{
			include('include/admin_get_posts.php');
		}
	?>
    <!-- ****** Archive Area Start ****** -->
    <section class="archive-area section_padding_80">
        <div class="container">
		<?php include('include/forme.php'); ?>
            <div class="row">
				
            </div>
        </div>
    </section>
    <!-- ****** Archive Area End ****** -->
    <!-- ****** Footer Social Icon Area Start ****** -->
    <div class="social_icon_area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-social-area d-flex">
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>facebook</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>GOOGLE+</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i><span>linkedin</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i><span>VIMEO</span></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>YOUTUBE</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Footer Social Icon Area End ****** -->

    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="index.php" class="yummy-logo">Yummy Blog</a>
                        </div>
                        <!-- Menu Area Start -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                            <!-- Menu Area Start -->
                            <div class="collapse navbar-collapse justify-content-center" id="yummyfood-footer-nav">
                                <?php include('include/navigacija.php'); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
		<?php include('include/copyright.php'); ?>
    </footer>
    <!-- ****** Footer Menu Area End ****** -->
	
	
    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
	<script src="js/sort.js" type="text/javascript"></script>
	<script src="js/provera.js"></script>
	<script src="js/paginacija.js"></script>
</body>
<?php mysqli_close($conn); ?>