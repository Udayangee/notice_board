<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<?php include 'includes/header_adlogin.php'?>

<div class="adlogin_center">
		
		
		<h1>Login</h1>
		<form action="<?php echo site_url('Admin/auth')?>" method="POST">
		
				<div class="adlogin_txt_field">
					<input type="email" required name="email">
					<span></span>
						<label>User Email</label>
				</div>

				<div class="adlogin_txt_field">
					<input type="password" required name="password">
					<span></span>
						<label>Password</label>
				</div>

				<div>
					<input type="submit" value="Login">
						
		
				</div>
		
				</form>

				
	
	</div>
<?php include 'includes/footer.php'?>
	



	