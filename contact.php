<?php
	session_start();
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
    <div class="breadcumb-area" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Contact Me</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Me</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Contatc Area Start ****** -->
    <div class="contact-area section_padding_80">
        <div class="container">
			<?php include('include/forme.php'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="google-map-area">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>

            <!-- Contact Info Area Start -->
            <div class="contact-info-area section_padding_80_50">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-4">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>France</h4>
                            <p>40 Baria Sreet 133/2 NewYork City, US <br> Email: info.contact@gmail.com <br> Phone: 123-456-7890</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-4">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.6s">
                            <h4>United States</h4>
                            <p>40 Baria Sreet 133/2 NewYork City, US <br> Email: info.contact@gmail.com <br> Phone: 123-456-7890</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-12 col-md-4">
                        <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.9s">
                            <h4>Viet Nam</h4>
                            <p>40 Baria Sreet 133/2 NewYork City, US <br> Email: info.contact@gmail.com <br> Phone: 123-456-7890</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s" style="background-image: url(img/bg-img/contact.jpg);">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                            <h2 class="contact-form-title mb-30">If You Have Any Question Contact Me Today !</h2>
                            <!-- Contact Form -->
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ime" id="contact-name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="contact-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="website" id="contact-website" placeholder="Website">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="text" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" name="posalji" class="btn contact-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
					<?php
						if(isset($_REQUEST['posalji']))
						{
							$txt = $_REQUEST['text'];
							$text = wordwrap($txt, 70);
							$to = "milos.simic.113.13@ict.edu.rs";
							$subject = "O sajtu";
							$headers = "From: webmaster@example.com";
							
							
							if(mail($to, $subject, $text, $headers))
								echo("<div class='alert alert-success' style='text-align: center'>
											<strong>Uspesno poslat mail</strong>
										</div>");
							else
								echo("<div class='alert alert-danger' style='text-align: center'>
											<strong>Niste uspeli da posaljete mail</strong>
										</div>");
						}
					?>
                </div>
            </div>

        </div>
    </div>
    <!-- ****** Contact Area End ****** -->

    <?php include('include/instagram.php'); ?>

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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
	<script src="js/provera.js"></script>
</body>
<?php mysqli_close($conn); ?>