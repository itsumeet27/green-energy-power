<!DOCTYPE html>

<?php 
	include('includes/init.php');
	session_start();	
?> 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | Green Energy Power</title>
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="img/lti-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
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
  <style type="text/css">
  	body{
      overflow-x: hidden;
    }
  </style>
</head>
<body>

	<div style="background: url(img/sample.jpg); background-repeat: no-repeat; background-size: cover;">
		<div class="row" style="padding-top: 6em;padding-bottom: 6em;">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="card" style="background-color: rgba(255,255,255,0.9);">
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
						</div>			
						<div class="card-footer">
							<div class="float-right">
								<button type="submit" name="login" class="btn btn btn-elegant mb-3">Login</button>
							</div>
						</div>
					</form>
					<?php 
						if(isset($_POST['login'])){
							if(empty($_POST['email']) || empty($_POST['password'])){
								echo "<script>window.open('login.php','_self')</script>";
							}else{
								$query = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".md5($_POST['password'])."'";
								$result = mysqli_query($db, $query);
								if($row = mysqli_fetch_assoc($result)){
									$_SESSION['email'] = $_POST['email'];
									$_SESSION['firstname'] = $row['firstname'];
									$_SESSION['id'] = $row['id'];
									echo "<script>window.open('profile/index.php','_self')</script>";
								}else{
									echo "<script>alert('Invalid email or password, please try again!');</script>";
								}
							}
						}

					?>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<?php include('includes/footer.php'); ?>