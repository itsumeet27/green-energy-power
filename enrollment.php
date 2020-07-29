<?php 
	include('includes/header.php'); 
?>


	<style type="text/css">
		input[type="text"], input[type="number"], input[type="email"], input[type="password"]{
			width: 300px;
		}

		@media only screen and (max-width: 991px) {
			.terms-and-conditions {
				height: 600px;
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
	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3" style="width: 100%;">
	  			<h3 class="h3-responsive mb-4 font-weight-bold" style="color: #555">Go through our Terms and Conditions!</h3>
	  			<section class="terms-and-conditions mt-2" style="width: 100%;height: 1366px;overflow-y: scroll; padding: 1em">
	  				<h4 class="font-weight-bold h4-responsive" style="color:#555">Definition:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      For the purpose of addressing each party, hereby the customer who enrolls for the solar installation will be denoted as “Client” and the  Green Energy Power Organization (operated by Powerganic Foundation)  who does the installation and investment will be denoted as “Contractor” and the EPC (Engineering Procurement and construction) provider will be denoted as “Sub-contractor”.
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Discount:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      Free electricity or discounted electricity is based on the available load from solar panels and windmill any excess load is drawn from grid payable as local DISCOM tariff rates. 
				      <ul>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          <b>0% discount plan</b> – free electricity is subjected to the load produced from the solar panel or windmill which is mainly during the daytime for solar panels and throughout the day for windmill. The Power Purchase Agreement of 10 years applies in this case. The price is as per local DISCOM policy at the time of joining.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          <b>25% discount plan</b> – discount is subjected to the load produced from the solar panel which is mainly during the daytime, or windmill. If hybrid grid is required for complete discounted electricity the battery installation price related adjustment on the period of free or discounted electricity will be adjusted accordingly
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          <b>50% discount plan</b> – discounts is subjected to the load produced from the solar panel which is mainly during the daytime.
				        </li>
				      </ul>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Panel installation:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          We have various Sub-contractors who are experienced (minimum 5years) EPC in the solar panel installation business will visit your enrolled address site with prior intimation through phone or email and approval from you to enter your premises for assessment of installation.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          The Sub-contractors shall report directly to Client or Contractor if extra requirements need to be attended. Upon such case, Client will be notified, and Contractor will discuss with Client for extra cost impact. Contractor will not adjust any extra requirements that are cost impact without the permission of Client. (Though in RESCO the investment is borne by Contractor but the extra fittings as per schemes may need adjustment for the time period of free electricity in the 0% and 25% discount such as 10 year will be extended to 11 or 12 years for cost adjustment).
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Access:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Whenever required from the installation to the end of life of panel the Client agrees to grant permission to sub-contractors who are employed and contracted by Contractor for carrying out the jobs by prior permission from Client before such access to Clients nominated premises for installation and follow up maintenance works.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          In the event of any damage occurred to the premises or property during the installation or maintenance and that is directly caused due to the impact of the installation or maintenance works will be assessed and fixed by Contractor.  
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Damage:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Any damage that is caused due to natural calamity to the units or equipment installed will be insured by the Contractor, but such damages should be pronounced government natural disaster. Any other disaster will be analyzed by Contractor and Sub-contractor for its credibility.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client agrees that, if the damage caused by Client negligence or any inducive manner will be assessed and the repair or replacement or damage expenses are liable to Client.
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Injury & Accident:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          In case of any assigned Contractor or Subcontractor personnel’s behavior is unacceptable, Client in his / her own discretion can deny access to such person and Client agrees to immediately report the incident to Contractor.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Any injury that happens to the personnel whilst working at the premises is a subject matter of the Contractor & Sub-contractor, if possible, Client reporting the incident will be appreciated. 
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Equipment and Device:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client agrees with the ownership of all the equipment to remain until its life with the Contractor, the Client agrees to allot the space that is occupiable by the devices and equipment, which is normally the rooftop or terrace or garden and the space for the battery inside their home or enclosed space if opted.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client also agrees that after installation in the agreed best suitable space, it is immovable or alterable except for any reasonable causes.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          In the case of change of place or alteration upon Clients reasonable causes, all cost bearable by Client.
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Subsidy:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          The Client agrees that the Contractor will claim all available government subsidy in relation to the installment of solar panels and windmill or any renewable energy equipment in their premises.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          As a not for profit company Contractor pledges the subsidy being used for the rural area farmland independent energy generation schemes.
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Billing and payment:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          The Client agrees for Contractor in billing and handling of their electricity connection on behalf of them for the purpose of applying the discount plans. Therefore, the client will not be able to receive any credits or any other benefits from DISCOM for the net metering consumption calculation or reading.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client agrees to pay their bill to the Contractor as per the bill adjustment calculated based on chosen discount plans or scheme.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client agrees for Contractor to claim all the Feed In Tariff (FIT) from the DISCOM as per local DISCOM policy. (The unused units electricity from the green energy equipment goes to grid such units will be available for FIT from DISCOM).
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client agrees that the discount only applies to the generated electricity consumed from the green energy equipment installed.
				        </li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Ownership:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      Client agrees that the ownership for the equipment installed in relation with the green energy or renewable energy will stay with the Contractor until its plan period chosen by Client. The following are the plans and ownership period mentioned during the enrollment;
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">0% discount plan for 10years and ownership is transferable to Client after the 10years discount period</li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">25% discount plan for 15 years and ownership is transferable to Client after 15 years discount period</li>
				      </ol>
				    </p>
				    <h4 class="font-weight-bold h4-responsive" style="color:#555">Premises space allocation for the equipment:</h4>
				    <p class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				      <ol type="1">
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          The space allocated by the Client in no means will be considered as lease or rental or exchange by Contractor. (It is comparable as a dish antenna equipment installation service where the equipment stays as a property of the supplier though it is sold to the customer).
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client is responsible for the authorization of the premises space allocation for green energy equipment in being the legal owner of the property.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          In the event of Client selling his / her property, it is the obligation of the Client to inform 1 month (calendar days) prior to the Contractor. In this case Contractor may approach to the new owner of the property for transformation of this arrangement and contract. Whatever the case may be, existing Contract terms and conditions will continue to prevail to the new owner.
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          If a lessee of the premises interested in the installation can represent with valid authorization document from lessor who is the legal owner of the property or premises. 
				        </li>
				        <li class="text-justify" style="font-weight: 400;color: #555;line-height: 1.7em;font-size: 17px;">
				          Client agrees that by agreeing to this terms and conditions, it is their responsibility to ensure that he / she is having legal authority to do so.
				        </li>
				      </ol>
				    </p>
	  			</section>
	  		</div>
	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
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