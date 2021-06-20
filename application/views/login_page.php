

	<div class="login_center">
		
		
		<h1>Login</h1>
		<?php echo $this->session->flashdata("error"); ?>

		<form action="<?php echo site_url('student/login_validation')?>" method="POST">
				<div class="login_txt_field">
					<input type="text" name="enroll" >
					<span class="text-danger"><?php echo form_error('enroll');?></span>
						<label>UserName</label>
				</div>

				<div class="login_txt_field">
					<input type="password" name="password" >
					<span class="text-danger"><?php echo form_error('password');?></span>
						<label>Password</label>
				</div>

				<div class="forgot_password">Forgot Password?</div>
					<input type="submit" value="Login">
						<div class="signup_link">
							Don't have an account?
								<a href="<?php echo base_url('student/register')?>">Register</a>
						</div>
		
		
		
			</form>
	
	
	</div>




