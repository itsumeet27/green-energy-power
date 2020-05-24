<?php include('includes/header.php'); ?>

	<style type="text/css">
		input[type="text"], input[type="number"], input[type="email"], input[type="password"]{
			width: 300px;
		}
	</style>
  	<script type="text/javascript">
	    function random_function(){
	        var a=document.getElementById("service").value;
	        if(a==="Home Rooftop Solar"){
	            var arr=["0% Discount","25% Discount","50% Discount"];
	        }else if(a==="Industrial or Commercial Sector Shed, or Building Rooftop Solar"){
	            var arr=["0% Discount","25% Discount","50% Discount"];
	        }else if(a==="Farmhouse or Farmland Windmill"){
	            var arr=["25% Discount","50% Discount (Currently Unavailable)"];
	        }else if(a==="High-rise Building Windmill"){
	            var arr=["25% Discount","50% Discount (Currently Unavailable)"];
	        }else if(a==="Coastal Windmill"){
	            var arr=["25% Discount","50% Discount (Currently Unavailable)"];
	        }
	     
	        var string="";
	     
	        for(i=0;i<arr.length;i++)
	        {
	            string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
	        }
	        document.getElementById("plan").innerHTML=string;
	    }
	</script>
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
	<div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="mask rgba-black-light d-flex justify-content-center align-items-center">
			<div class="text-center white-text mx-5 wow fadeIn">
				<h1 class="mb-4">
					<strong>ENROLLMENT FORM</strong>
					<hr class="my-4" style="width: 125px;border-color: #fff;border-width: 2px;border-radius:20px;border-style: solid;">
				</h1>
			</div>
		</div>
	</div>
  	<section class="container-fluid py-5">
	  	<div class="row">
	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	  			<iframe src="docs/Terms and Conditions.pdf" style="width: 100%; height: 100%"></iframe>
	  		</div>
	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	  			<h3 class="h3-responsive mb-4 font-weight-bold" style="color: #555">Fill out the enrollment form!</h3>
	  			<!-- Default form contact -->
				<form class="text-justify needs-validation" action="" method="post" novalidate>

				    <!-- First Name -->
				    <label style="color:#555;font-weight:400" for="firstname">First Name</label>
				    <input type="text" id="firstname" name="firstname" class="form-control mb-4" is-valid is-invalid required>

				    <!-- Last Name -->
				    <label style="color:#555;font-weight:400" for="lastname">Last Name</label>
				    <input type="text" id="lastname" name="lastname" class="form-control mb-4" is-valid is-invalid required>

				    <!-- Select Service -->
				    <label style="color:#555;font-weight:400" for="service">Select Service</label><br>
				    <select class="browser-default custom-select mb-4" name="service" id="service" style="width: 300px" onchange="random_function()" is-valid is-invalid required>
				    	<option value="Nothing Selected">Select Service</option>
				        <option value="Home Rooftop Solar">Home Rooftop Solar</option>
				        <option value="Industrial or Commercial Sector Shed, or Building Rooftop Solar">
				        	Industrial or Commercial Sector Shed, or Building Rooftop Solar
				        </option>
				        <option value="Farmhouse or Farmland Windmill">Farmhouse or Farmland Windmill</option>
				        <option value="High-rise Building Windmill">High-rise Building Windmill</option>
				        <option value="Coastal Windmill">Coastal Windmill</option>
				    </select><br>

				    <!-- Select Plan -->
				    <label style="color:#555;font-weight:400" for="plan">Select Plan</label><br>
				    <select class="browser-default custom-select mb-4" name="plan" id="plan" style="width: 300px" onchange="random_function1()" is-valid is-invalid required>
				    	<option value="Select Plan">Select Plan</option>
				    </select><br>

				    <!-- Avg. Units Used Per Billing Cycle -->
				    <label style="color:#555;font-weight:400" for="avg_units_used">Avg. Units Used Per Billing Cycle</label>
				    <input type="number" id="avg_units_used" name="avg_units_used" class="form-control mb-4" min="0" is-valid is-invalid required>

				    <!-- Electricity Connection Number -->
				    <label style="color:#555;font-weight:400" for="electricity_number">Electricity Connection Number</label>
				    <input type="text" id="electricity_number" name="electricity_number" class="form-control mb-4" min="0" is-valid is-invalid required>

				    <!-- Connection Area Code -->
				    <label style="color:#555;font-weight:400" for="conn_area_code">Connection Area Code</label>
				    <input type="text" id="conn_area_code" name="conn_area_code" class="form-control mb-4" is-valid is-invalid required>

				    <!-- District -->
				    <label style="color:#555;font-weight:400" for="district">District</label>
				    <input type="text" id="district" name="district" class="form-control mb-4" is-valid is-invalid required>

					<!-- Area/Place -->
				    <label style="color:#555;font-weight:400" for="area_place">Area/Place</label>
				    <input type="text" id="area_place" name="area_place" class="form-control mb-4" is-valid is-invalid required>		    

				    <!-- Email -->
				    <label style="color:#555;font-weight:400" for="email">Email</label>
				    <input type="email" id="email" name="email" class="form-control mb-4" is-valid is-invalid required>

				    <!-- Password -->
				    <label style="color:#555;font-weight:400" for="password">Password</label>
				    <input type="password" id="password" name="password" class="form-control mb-4" is-valid is-invalid required>

				    <!-- Confirm Password -->
				    <label style="color:#555;font-weight:400" for="confirm_password">Confirm Password</label>
				    <input type="password" id="confirm_password" name="confirm_password" class="form-control mb-4" is-valid is-invalid required>

				    <!-- Terms and Conditons Check -->
				    <div class="custom-control custom-checkbox mb-4">
				        <input type="checkbox" class="custom-control-input" id="terms_and_conditions" name="terms_and_conditions" value="check" is-valid is-invalid required>
				        <label style="color:#555;font-weight:400" class="custom-control-label" for="terms_and_conditions">I have read the terms and conditions carefully!</label>
				    </div>

				    <!-- Send button -->
				    <button class="btn btn-info btn-block" type="submit" name="submit" style="width: 300px">Submit</button>

				</form>
				<!-- Default form contact -->
	  		</div>
	  	</div>
  	</section>

  	<?php
  		if($_POST){
  			$check = $_POST['terms_and_conditions'];
  			$firstname = sanitize($_POST['firstname']);
  			$lastname = sanitize($_POST['lastname']);
  			$service = sanitize($_POST['service']);
  			$plan = sanitize($_POST['plan']);
  			$avg_units_used = sanitize($_POST['avg_units_used']);
  			$electricity_number = sanitize($_POST['electricity_number']);
  			$conn_area_code = sanitize($_POST['conn_area_code']);
  			$district = sanitize($_POST['district']);
  			$area_place = sanitize($_POST['area_place']);
  			$email = sanitize($_POST['email']);
  			$password = sanitize(md5($_POST['password']));
			$confirm_password = sanitize(md5($_POST['confirm_password']));

			if($confirm_password != $password){
              echo "<script>alert('Your password does not match')</script>";
              echo "<script>window.open('enrollment.php','_self')</script>";;
            }else{
            	if(isset($check)){
					$insert = "INSERT INTO enrollment (firstname,lastname,service,plan,avg_units_used,electricity_number,conn_area_code,district,area_place,email,password) VALUES ('$firstname','$lastname','$service','$plan','$avg_units_used','$electricity_number','$conn_area_code','$district','$area_place','$email','$password')";
					$result = $db->query($insert);
					var_dump($result);
					if($result){
						$_SESSION['email'] = $email;
						echo "<script>alert('Your account has been created successfully')</script>";
						echo "<script>window.open('profile.php','_self')</script>";
					}else{
						echo "<script>alert('Your account was not created, please try again!')</script>";
						echo "<script>window.open('enrollment.php','_self')</script>";
					}
				}
			}
  		}
  	?>

<?php include('includes/footer.php'); ?>