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
				    	<strong>Change Password</strong>
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
							<div class="md-form form-sm">
								<input type="password" id="confirm_password" name="confirm_password" class="form-control mb-4" is-valid is-invalid required>
								<label for="password">Confirm Password</label>
							</div>
						</div>			
						<div class="card-footer">
							<div class="float-right">
								<button type="submit" name="submit" class="btn btn btn-elegant mb-3">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php

		$sql = "SELECT * FROM users";
		$result = $db->query($sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$user_email = $row['email'];
			}
		}

		if(isset($_POST['submit'])){
			$email = sanitize($_POST['email']);
			$password = sanitize(md5($_POST['password']));
			$confirm_password = sanitize(md5($_POST['confirm_password'])); 

			if($email == $user_email){
				if($confirm_password != $password){
					echo "<script>alert('Your password does not match')</script>";
					echo "<script>window.open('forgot-password.php','_self')</script>";
	            }else{
	            	$updateSql = "UPDATE users SET password = '$password' WHERE email = '$email'";
	            	$runUpdate = $db->query($updateSql);
	            	if($runUpdate){
	            		echo "<script>alert('Your password has been changed, please login!')</script>";
						echo "<script>window.open('login.php','_self')</script>";
	            	}

	            }
			}else{
				echo "<script>alert('You are not registered, please enroll!')</script>";
	            echo "<script>window.open('forgot-password.php','_self')</script>";
			}
		}
	?>

<?php include('includes/footer.php'); ?>