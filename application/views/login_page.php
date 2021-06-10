<?php include 'partials/header_login.php'?>

	<div class="login_center">
		
		
		<h1>Login</h1>
					<form method="post">
				<div class="login_txt_field">
					<input type="text" required>
					<span></span>
						<label>UserName</label>
				</div>

				<div class="login_txt_field">
					<input type="password" required>
					<span></span>
						<label>Password</label>
				</div>

				<div class="forgot_password">Forgot Password?</div>
					<input type="submit" value="Login">
						<div class="signup_link">
							Don't have an account?
								<a href="<?php echo base_url('index.php/Home/register')?>">Register</a>
						</div>
		
		
		
			</form>
	
	
	</div>

<?php include 'partials/footer.php'?>


