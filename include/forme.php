<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Login to Your Account</h1><br>
						
					  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<input type="text" name="user" placeholder="Username">
						<input type="password" name="pass" placeholder="Password">
						<input type="submit" name="btnLogin" class="login loginmodal-submit" value="Login">
					  </form>								
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="loginmodal-container">
						<h1>Register your Account</h1><br>
						
					  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<input type="text" id="tbUsername" name="username" placeholder="Username" onKeyUp="proveraUsername();"/>
						<input type="text" id="tbFirstName" name="first_name" placeholder="First Name" onKeyUp="proveraFirstName();"/>
						<input type="text" id="tbLastName" name="last_name" placeholder="Last Name" onKeyUp="proveraLastName();"/>
						<input type="email" id="tbEmail" name="email" placeholder="Email Address" onKeyUp="proveraEmail();"/>
						<input type="password" id="tbPassword" name="pass" placeholder="Password" onKeyUp="proveraPassword();"/>
						<input type="password" id="tbPassword2" name="rePass" placeholder="Confirm password" onKeyUp="proveraPassword2();"/>
						<input type="submit" name="btnRegister" class="login loginmodal-submit" value="Register"/>
					  </form>
					</div>
				</div>
			</div>