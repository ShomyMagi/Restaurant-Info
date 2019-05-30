<div class="col-7 col-sm-6">
	<div class="signup-search-area d-flex align-items-center justify-content-end">
		<div class="login_register_area d-flex">
			<?php if(!isset($_SESSION['idU'])){ ?>
			<div class="login">
				<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
			</div>
			<div class="register">
				<a href="#" data-toggle="modal" data-target="#register-modal">Register</a>
			</div>
			<?php } else if($_SESSION['uloga'] == 'admin') { ?>
			<div class="login">
				<a href="admin.php">Admin</a>
			</div>
			<div class="logout">
				<a href="logout.php">Logout</a>
			</div>
			<?php } else if($_SESSION['uloga'] == 'user') { ?>
			<div class="logout">
				<a href="logout.php">Logout</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>