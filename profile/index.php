<?php 
	session_start();
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('../login.php','_self')</script>";
	}else{
		include('includes/header.php'); 

		// Read Database
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $db->query($sql);
		while ($row_pro = mysqli_fetch_array($result)) {
		    $id = $row_pro['id'];
		    $firstname = $row_pro['firstname'];
		    $lastname = $row_pro['lastname'];
		    $govt_id = $row_pro['govt_id'];
		    $id_no = $row_pro['id_no'];
		    $email = $row_pro['email'];
		    $service = $row_pro['service'];
		    $plan = $row_pro['plan'];
		    $avg_units_used = $row_pro['avg_units_used'];
		    $electricity_number = $row_pro['electricity_number'];
		    $conn_area_code = $row_pro['conn_area_code'];
		    $district = $row_pro['district'];
		    $area_place = $row_pro['area_place'];
		    $request = $row_pro['request'];
		}
?>
	<style type="text/css">
		.btn-floating{			
    		cursor: pointer;
    		border-radius: 50%;
    		overflow: hidden;
    		vertical-align: middle;
    		box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
    		transition: all .2s ease-in-out;

		}

		.btn-floating{
			width: 30px;
    		height: 30px;
    		border:none!important;
		}

		.options{
			width: 30px;
    		height: 30px;
    		border:none!important;
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
					<strong>Welcome: <?=$firstname?> <?=$lastname; ?></strong>
					<hr class="my-4" style="width: 125px;border-color: #fff;border-width: 2px;border-radius:20px;border-style: solid;">
				</h1>
			</div>
		</div>
	</div>

	<!-- Profile Details -->
	<div class="container-fluid profile-details my-4">
		<h3 class="text-center pb-4" style="font-weight: 400">Profile Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm">
				<thead style="background: #004a6e;color: #fff">
					<th></th>
					<th>Full Name</th>
					<th>Govt. ID</th>
					<th>Email</th>
					<th>Service</th>
					<th>Plan</th>
					<th>Avg. Units Used Per Billing Cycle</th>
					<th>Electricity Connection Number</th>
					<th>Connection Area Code</th>
					<th>District</th>
					<th>Area/Place</th>
				</thead>
				<tbody>
					<tr>
						<td>
							<form name="request_now" method="post" action="">
								<?php 
									if($request == 1) { ?>
										<button class="btn-floating options btn-success" disabled><i class="fas fa-check-circle" title="Requested"></i></button>
									<?php }else{
								?>
									<button class="btn-floating options btn-primary" type="submit" name="request_now" title="Request Now"><i class="fas fa-hand-point-up"></i></button>
								<?php } ?>
							</form>
						</td>
						<td style="font-weight: 400"><?=$firstname; ?> <?=$lastname; ?></td>
						<td style="font-weight: 400"><?=$govt_id; ?> - <?=$id_no; ?></td>
						<td style="font-weight: 400"><?=$email; ?></td>
						<td style="font-weight: 400"><?=$service; ?></td>
						<td style="font-weight: 400"><?=$plan; ?> Discount</td>
						<td style="font-weight: 400"><?=$avg_units_used; ?></td>
						<td style="font-weight: 400"><?=$electricity_number; ?></td>
						<td style="font-weight: 400"><?=$conn_area_code; ?></td>
						<td style="font-weight: 400"><?=$district; ?></td>
						<td style="font-weight: 400"><?=$area_place; ?></td>
					</tr>
				</tbody>
			</table>
		</div>

		<!-- Edit Details, Change Password & Delete Account -->

		<!-- Edit Account -->
        <div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title w-100">Edit Profile</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form name="edit_account" action="" method="post" class="needs-validation" novalidate>
                <div class="modal-body mx-3">
                	<div class="row">
                		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                			<!-- First Name -->
						    <label style="color:#555;font-weight:400" for="firstname">First Name</label>
						    <input type="text" id="firstname" name="firstname" class="form-control mb-4" value="<?=$firstname?>" is-valid is-invalid required>

						    <!-- Last Name -->
						    <label style="color:#555;font-weight:400" for="lastname">Last Name</label>
						    <input type="text" id="lastname" name="lastname" class="form-control mb-4" value="<?=$lastname?>" is-valid is-invalid required>

						    <!-- Select Service -->
						    <label style="color:#555;font-weight:400" for="service">Select Service</label><br>
						    <select class="browser-default custom-select mb-4" name="service" id="service" onchange="random_function()" is-valid is-invalid required>
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
						    <select class="browser-default custom-select mb-4" name="plan" id="plan" onchange="random_function1()" is-valid is-invalid required>
						    	<option value="Select Plan">Select Plan</option>
						    </select><br>

						    <!-- Avg. Units Used Per Billing Cycle -->
						    <label style="color:#555;font-weight:400" for="avg_units_used">Avg. Units Used Per Billing Cycle</label>
						    <input type="number" id="avg_units_used" name="avg_units_used" class="form-control mb-4" min="0" value="<?=$avg_units_used?>" is-valid is-invalid required>
                		</div>
                		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                			<!-- Electricity Connection Number -->
						    <label style="color:#555;font-weight:400" for="electricity_number">Electricity Connection Number</label>
						    <input type="text" id="electricity_number" name="electricity_number" class="form-control mb-4" value="<?=$electricity_number?>" min="0" is-valid is-invalid required>

						    <!-- Connection Area Code -->
						    <label style="color:#555;font-weight:400" for="conn_area_code">Connection Area Code</label>
						    <input type="text" id="conn_area_code" name="conn_area_code" class="form-control mb-4" value="<?=$conn_area_code?>" is-valid is-invalid required>

						    <!-- District -->
						    <label style="color:#555;font-weight:400" for="district">District</label>
						    <input type="text" id="district" name="district" class="form-control mb-4" value="<?=$district?>" is-valid is-invalid required>

							<!-- Area/Place -->
						    <label style="color:#555;font-weight:400" for="area_place">Area/Place</label>
						    <input type="text" id="area_place" name="area_place" class="form-control mb-4" value="<?=$area_place?>" is-valid is-invalid required>

						    <!-- Email -->
						    <label style="color:#555;font-weight:400" for="email">Email</label>
						    <input type="email" id="email" name="email" class="form-control mb-4" value="<?=$email?>" is-valid is-invalid required>
                		</div>
                	</div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="update">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Change Password -->
        <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title w-100">Change Password</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form name="change_password" action="" method="post" class="needs-validation" novalidate>
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <i class="fas fa-lock-open prefix grey-text"></i>
                    <input type="password" id="currentpassword" class="form-control validate" name="currentpassword" is-valid is-invalid required>
                    <label for="currentpassword">Current Password</label>
                  </div>
                  <div class="md-form mb-5">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="newpassword" class="form-control validate" name="newpassword" is-valid is-invalid required>
                    <label for="newpassword">New Password</label>
                  </div>
                  <div class="md-form mb-5">
                    <i class="fas fa-user-lock prefix grey-text"></i>
                    <input type="password" id="confirmpassword" class="form-control validate" name="confirmpassword" is-valid is-invalid required>
                    <label for="confirmpassword">Confirm Password</label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success" type="submit" name="update_password">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Delete Account -->
        <div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h3 class="modal-title w-100">Delete Account?</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="message">
                  <p class="text-center">You won't be able to access the portal anymore along with the features and uses!</p>
                </div>
              </div>
              <div class="modal-footer">
                <form name="delete_account" method="post" action="" enctype="multipart/form-data">
                  <div class="float-left">
                        <button class="btn btn-danger" type="submit" name="yes">Yes, I do</button>
                  </div>
                  <div class="float-right">
                        <button class="btn btn-success" type="submit" name="no">No, I don't</button>
                  </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
		<div class="mt-2 ml-0">
			<a href="" class="btn btn-elegant btn-rounded mb-4" data-toggle="modal" data-target="#editAccount">Edit Details</a>
			<a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#changePassword">Change Password</a>
			<a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#deleteAccount">Delete Account</a>
	    </div>
	</div>

	<?php

		//Request Now
		if(isset($_POST['request_now'])){
			$request = "UPDATE users SET request = 1 WHERE id = '$id'";
			$runRequest = $db->query($request);
			if($runRequest){
				echo "<script>alert('Your request has been taken! Our associate will visit your place soon for installation.')</script>";
				echo "<script>window.open('index.php', '_self')</script>";
			}
		}

		// Update User
		if(isset($_POST['update'])){
			$user_id = $id;
			$edit_firstname = $_POST['firstname'];
			$edit_lastname = $_POST['lastname'];
			$edit_email = $_POST['email'];
			$edit_service = $_POST['service'];
		    $edit_plan = $_POST['plan'];
		    $edit_avg_units_used = $_POST['avg_units_used'];
		    $edit_electricity_number = $_POST['electricity_number'];
		    $edit_conn_area_code = $_POST['conn_area_code'];
		    $edit_district = $_POST['district'];
		    $edit_area_place = $_POST['area_place'];

			$updateUser = "UPDATE users SET firstname = '$edit_firstname', lastname = '$edit_lastname', email = '$edit_email', service = '$edit_service', plan = '$edit_plan', avg_units_used = '$edit_avg_units_used', electricity_number = '$edit_electricity_number', conn_area_code = '$edit_conn_area_code', district = '$edit_district', area_place = '$area_place' WHERE id='$user_id'";
			$run_query = $db->query($updateUser);
			if($run_query){
				echo "<script>alert('Your account has been successfully updated')</script>";
				echo "<script>window.open('index.php','_self')</script>";
				if($_SESSION){
					$_SESSION['firstname'] = $edit_firstname;
				}
			}
		}

		// Update Password
		$email = $_SESSION['email'];
		if(isset($_POST['update_password'])){
			$current_password = md5($_POST['currentpassword']);
			$new_password = md5($_POST['newpassword']);
			$confirm_password = md5($_POST['confirmpassword']);

			$sqlPass = "SELECT * FROM users WHERE password = '$current_password' AND email = '$email'";
			$runPass = $db->query($sqlPass);
			$checkPass = mysqli_num_rows($runPass);
			if($checkPass == 0){
				echo "<script>alert('Your current password is wrong')</script>";
				exit();
			}
			if($confirm_password != $new_password){
				echo "<script>alert('Your password does not match')</script>";
				exit();
			}else{
				$updatePassword = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
				$runUpdate = $db->query($updatePassword);
				echo "<script>alert('Your password has been updated successfully!')</script>";
				echo "<script>window.open('index.php','_self')</script>";
			}
		}

		// Delete Account
		$email = $_SESSION['email'];
		if(isset($_POST['yes'])){
			$delete_user = "DELETE FROM users WHERE email = '$email'";
			$run_delete = $db->query($delete_user);
			session_destroy();
			echo "<script>alert('Your account has been deleted successfully!')</script>";
			echo "<script>window.open('../index.php', '_self')</script>";
		}
		if(isset($_POST['no'])){
			echo "<script>alert('We are glad you are with us!')</script>";
			echo "<script>window.open('index.php', '_self')</script>";
		}
	?>
<?php include('includes/footer.php'); } ?>