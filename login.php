<?php 
	include('includes/header.php'); 
?>
	<script type="text/javascript">
		(function() {
			'use strict';
				window.addEventListener('load', function() {
					// Fetch all the forms we want to apply custom Bootstrap validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
						form.classList.add('was-validated');
						}, false);
					});
			}, false);
		})();
	</script>

	<div style="background: url('img/Terms & Condition.jpg'); background-repeat: no-repeat; background-size: cover;background-attachment: fixed;">
		<div class="row px-3" style="padding-top: 12em;padding-bottom: 6em;background: rgba(0,0,0,0.5)">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card" style="background-color: rgba(255,255,255,0.9);">
					<h5 class="card-header elegant-color white-text text-center py-4">
				    	<strong>Log in</strong>
				  	</h5>
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="card-body">
							<div class="md-form form-sm">
								<input type="email" id="email" class="form-control form-control-sm" name="email"  is-valid is-invalid required>
								<label for="email">Email</label>
							</div>
							<div class="md-form form-sm">
								<input type="password" id="password" class="form-control form-control-sm" name="password"  is-valid is-invalid required>
								<label for="password">Password</label>
							</div>
							<div class="text-center">
								<p class="p-2">Forgot your password? <a href="forgot-password.php">Click here</a></p>
							</div>
						</div>			
						<div class="card-footer">
							<div class="float-right">
								<button type="submit" name="login" class="btn btn btn-elegant mb-3">Login</button>
							</div>
						</div>
					</form>
					<?php 
						if(isset($_POST['login'])){
							$email = $_POST['email'];
							$password = md5($_POST['password']);
							$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
							$result = $db->query($query);
							$num = mysqli_fetch_array($result);
							$status = $num['status'];
							if($num > 0){	
								if($status == 0){
									echo "<script>alert('Verify your Email Id by clicking  the link In your mailbox')</script>";
								}else{
									$_SESSION['email']=$email;
									$_SESSION['id']=$num['id'];
									$_SESSION['firstname']=$num['firstname'];
									$extra="profile/index.php";
									$host=$_SERVER['HTTP_HOST'];
									$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
									echo "<script>window.open('profile/index.php','_self')</script>";
									exit();
								}
							}else{
								echo "<script>alert('Invalid login credentials, please try again!')</script>";
								$extra="login.php";
								$host  = $_SERVER['HTTP_HOST'];
								$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
								echo "<script>window.open('login.php','_self')</script>";
								exit();
							}
						}

					?>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<?php include('includes/footer.php'); ?>