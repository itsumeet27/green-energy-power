<?php include('includes/header.php'); ?>

  <style type="text/css">
  	input[type="text"], input[type="number"], input[type="email"], input[type="password"]{
  		width: 300px;
  	}
  </style>

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
			<form class="text-justify" action="" method="post">

			    <!-- First Name -->
			    <label style="color:#555;font-weight:400" for="firstname">First Name</label>
			    <input type="text" id="firstname" name="firstname" class="form-control mb-4">

			    <!-- Last Name -->
			    <label style="color:#555;font-weight:400" for="lastname">Last Name</label>
			    <input type="text" id="lastname" name="lastname" class="form-control mb-4">

			    <!-- Select Service -->
			    <label style="color:#555;font-weight:400" for="service">Select Service</label><br>
			    <select class="browser-default custom-select mb-4" name="service" id="service" style="width: 300px">
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
			    <select class="browser-default custom-select mb-4" name="plan" id="plan" style="width: 300px">
			        <option value="0%">0%</option>
			        <option value="25%">25%</option>
			        <option value="50%">50%</option>
			    </select><br>

			    <!-- Avg. Units Used Per Billing Cycle -->
			    <label style="color:#555;font-weight:400" for="avg_units_used">Avg. Units Used Per Billing Cycle</label>
			    <input type="number" id="avg_units_used" name="avg_units_used" class="form-control mb-4" min="0">

			    <!-- Electricity Connection Number -->
			    <label style="color:#555;font-weight:400" for="electricity_number">Electricity Connection Number</label>
			    <input type="text" id="electricity_number" name="electricity_number" class="form-control mb-4" min="0">

			    <!-- Connection Area Code -->
			    <label style="color:#555;font-weight:400" for="conn_area_code">Connection Area Code</label>
			    <input type="text" id="conn_area_code" name="conn_area_code" class="form-control mb-4">

			    <!-- District -->
			    <label style="color:#555;font-weight:400" for="district">District</label>
			    <input type="text" id="district" name="district" class="form-control mb-4">

				<!-- Area/Place -->
			    <label style="color:#555;font-weight:400" for="area_place">Area/Place</label>
			    <input type="text" id="area_place" name="area_place" class="form-control mb-4">		    

			    <!-- Email -->
			    <label style="color:#555;font-weight:400" for="email">Email</label>
			    <input type="email" id="email" name="email" class="form-control mb-4">

			    <!-- Password -->
			    <label style="color:#555;font-weight:400" for="password">Password</label>
			    <input type="password" id="password" name="password" class="form-control mb-4">

			    <!-- Confirm Password -->
			    <label style="color:#555;font-weight:400" for="confirm_password">Confirm Password</label>
			    <input type="password" id="confirm_password" name="confirm_password" class="form-control mb-4">

			    <!-- Terms and Conditons Check -->
			    <div class="custom-control custom-checkbox mb-4">
			        <input type="checkbox" class="custom-control-input" id="terms_and_conditions" name="terms_and_conditions" value="check">
			        <label style="color:#555;font-weight:400" class="custom-control-label" for="terms_and_conditions">I have read the terms and conditions carefully!</label>
			    </div>

			    <!-- Send button -->
			    <button class="btn btn-info btn-block" type="submit" style="width: 300px">Submit</button>

			</form>
			<!-- Default form contact -->
  		</div>
  	</div>
  </section>

<?php include('includes/footer.php'); ?>