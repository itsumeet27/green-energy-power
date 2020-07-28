<?php 
	include('includes/header.php'); 
?>


	<style type="text/css">
		input[type="text"], input[type="number"], input[type="email"], input[type="password"]{
			width: 300px;
		}

		#terms-and-conditions-mobile{
			display: none;
		}

		@media only screen and (max-width: 991px) {
			#terms-and-conditions {
				display: none;
			}
			#terms-and-conditions-mobile{
				display: block;
			}
		}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
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
	
	<div style="margin-top: 7.5em">
		<img src="img/Terms & Condition.jpg" class="img-responsive img-fluid">
	</div>

  	<section class="container-fluid py-5 mb-5">
	  	<div class="row">
	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 100%;" id="terms-and-conditions">
	  			<h3 class="h3-responsive mb-4 font-weight-bold" style="color: #555">Go through our Terms and Conditions!</h3>
	  			<iframe src="docs/Terms and Conditions.pdf" style="width: 100%; height: 100%"></iframe>
	  			<!-- <object data="docs/Terms and Conditions.pdf" type="application/pdf" width="100%" height="100%">
				  <p>Your web browser doesn't have a PDF plugin.
				  Instead you can <a href="docs/Terms and Conditions.pdf">click here to
				  download the PDF file.</a></p>
				</object> -->
	  		</div>
	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 100%;" id="terms-and-conditions-mobile">
	  			<h3 class="h3-responsive mb-4 font-weight-bold" style="color: #555">Go through our Terms and Conditions!</h3>
	  			<p class="lead"><a href="docs/Terms and Conditions.pdf">Click here</a> to read our terms and conditions</p>
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

				    <!-- Government ID -->
				    <label style="color:#555;font-weight:400" for="govt_id">Government ID</label>
				    <div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="aadhar_card" name="govt_id" value="Aadhar Card">
						<label class="custom-control-label" style="font-size: 0.875rem;" for="aadhar_card">Aadhar Card</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="pan_card" name="govt_id" value="PAN Card">
						<label class="custom-control-label" style="font-size: 0.875rem;" for="pan_card">PAN Card</label>
					</div>

					<!-- ID No. -->
					<label style="color:#555;font-weight:400" for="id_no">ID No.</label>
					<input type="text" id="id_no" name="id_no" class="form-control mb-4" is-valid is-invalid required>

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
				    <button class="btn btn-block" type="submit" name="submit" style="width: 300px;background: #004a6e; color: #fff">Submit</button>

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
  			$govt_id = sanitize($_POST['govt_id']);
  			$id_no = sanitize($_POST['id_no']);
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
			$status = 0;
			$activationcode=md5($email.time());

			if($confirm_password != $password){
              echo "<script>alert('Your password does not match')</script>";
              echo "<script>window.open('enrollment.php','_self')</script>";;
            }else{
            	if(isset($check)){
            		$sql = "SELECT * FROM users WHERE email = '$email'";
            		$fetch = $db->query($sql);
            		$email_check = mysqli_fetch_array($fetch);
            		if($email != $email_check['email']){
            			$insert = "INSERT INTO users (firstname,lastname,govt_id,id_no,service,plan,avg_units_used,electricity_number,conn_area_code,district,area_place,email,password,activationcode,status) VALUES ('$firstname','$lastname','$govt_id','$id_no','$service','$plan','$avg_units_used','$electricity_number','$conn_area_code','$district','$area_place','$email','$password','$activationcode','$status')";
						$result = $db->query($insert);
						if($result){
							$to=$email;
							$msg= "Thanks for new Registration.";   
							$subject=" Email Verification";
							$headers .= "MIME-Version: 1.0"."\r\n";
					        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
					        $headers .= 'From:Green Energy Power <sksksharma0@gmail.com>'."\r\n";

					        $msg.="
					        	<html>
					        		<body>
					        			<div class='container-fluid'>
					        				<h3 class='h3-responsive text-justify'>Dear $firstname $lastname,</h3></br></br>";
							$msg.="
											<p style='padding-top:8px;color: green;font-size: 18px'>Your account information is successfully updated in our server. Please click the following link for verifying and activation your account.
											</p>
											<div style='padding-top:10px;'><a style='padding: 8px 15px;background-color:green;color:#fff;' href='http://netmatesolutions.com/green-energy-power/email_verification.php?code=$activationcode'>Click Here</a>
											</div>
											<p style='padding-top:4px;font-size:18px'> Powered by <a href='http://netmatesolutions.com/green-energy-power/'>Green Energy Power</a>
											</p>
										</div>
									</body>
								</html>";
							mail($to,$subject,$msg,$headers);
					    	echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
							echo "<script>window.location = 'login.php';</script>";
							$_SESSION['email'] = $email;
							echo "<script>alert('Your account has been created successfully')</script>";
							echo "<script>window.open('profile/index.php','_self')</script>";
						}else{
							echo "<script>alert('Your account was not created, please try again!')</script>";
							echo "<script>window.open('enrollment.php','_self')</script>";
						}
            		}else{
            			echo "<script>alert('Email already exists!')</script>";
            			echo "<script>window.open('enrollment.php','_self')</script>";
            		}
				}
			}
  		}
  	?>

<?php include('includes/footer.php'); ?>