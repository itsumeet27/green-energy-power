<?php 
	session_start();
	if(!isset($_SESSION['email'])){
		echo "<script>window.open('../login.php','_self')</script>";
	}else{
		include('includes/header.php'); 

		// Read Database
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];

		$sqlUsers = "SELECT * FROM users WHERE email = '$email'";
		$result = $db->query($sqlUsers);
		while ($row_pro = mysqli_fetch_array($result)) {
		    $user_id = $id;
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

		$sqlComplaints = "SELECT u.firstname, u.lastname, u.email, c.complaint_id, c.subject, c.description, c.response, c.status FROM complaints c INNER JOIN users u ON u.id = c.user_id";
		$resultComplaint = $db->query($sqlComplaints);
		if(mysqli_num_rows($resultComplaint) > 0){
			while ($row_pro = mysqli_fetch_array($resultComplaint)) {
			    $complaint_id = $row_pro['complaint_id'];
			}
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
			width: 45px;
    		height: 45px;
    		border:none!important;
		}

		.options{
			width: 45px;
    		height: 45px;
    		border:none!important;
		}

		.response{
			width: 30px;
    		height: 30px;
    		border:none!important;
		}
	</style>

	<!-- Profile Details -->
	<div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">
		<div class="mask rgba-black-light d-flex justify-content-center align-items-center">
			<div class="text-center white-text mx-5 wow fadeIn">
				<h1 class="mb-4">
					<strong>Complaints</strong>
					<hr class="my-4" style="width: 125px;border-color: #fff;border-width: 2px;border-radius:20px;border-style: solid;">
				</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid profile-details my-4">
		<h2 class="text-center" style="font-weight: 400">List of all complaints</h2>

		<button type="button" class="btn-primary btn-floating options my-2" data-toggle="modal" data-target="#centralModal"><i class="fas fa-plus-circle"></i></button><span class="text-justify ml-3" style="font-weight: 500; color: #555">Add a Complain</span>

		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm">
				<thead style="background: #004a6e;color: #fff">
					<th></th>
					<th>Complaint ID</th>
					<th>Subject</th>
					<th>Description</th>
					<th>Response</th>
					<th>Status</th>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM complaints WHERE user_id = '$id' ORDER BY subject ASC";
						$run = $db->query($sql);
						if(mysqli_num_rows($run) > 0){
							while ($complain = mysqli_fetch_array($run)):
					?>
					<tr>
						<td>
							<form name="send_response" method="post" action="">
								<?php 
									if($complain['status'] == 'Done') { ?>
										<button class="btn-floating response btn-success" disabled><i class="fas fa-check-circle" title="Complaint Resolved"></i></button>
									<?php }else{
								?>
									<button class="btn-floating response btn-primary" type="submit" name="send_response" title="Send Response"><i class="fas fa-hourglass-half"></i></button>
								<?php } ?>
							</form>
						</td>
						<td style="font-weight: 400"><?=$complain['complaint_id']; ?></td>
						<td style="font-weight: 400"><?=$complain['subject']; ?></td>
						<td style="font-weight: 400"><?=$complain['description']; ?></td>
						<td style="font-weight: 400;color: green"><?=$complain['response']; ?></td>
						<?php if($complain['status'] == 'In Progress'){ ?>
						<td style="font-weight: 400;color: green"><?=$complain['status']; ?></td>
						<?php }elseif($complain['status'] == 'Done'){ ?>
						<td style="font-weight: 400;color: blue"><?=$complain['status']; ?></td>
						<?php }else{ ?>
						<td style="font-weight: 400;"><?=$complain['status']; ?></td>
						<?php } ?>
					</tr>
					<?php endwhile; } ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Complaint Modal -->
	<div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Raise your complaint</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="needs-validation" name="catalog" id="catalog" action="" method="post" enctype="multipart/form-data" novalidate>
						<div class="form-group">
							<div class="form-sm mt-1">
								<label for="subject" style="font-weight: 400;color: #555">Subject</label>
								<input type="text" id="subject" class="form-control form-control-sm" name="subject">
							</div>
							<div class="form-sm mt-1">
								<label for="description" style="font-weight: 400;color: #555">Description</label>
								<textarea id="description" class="form-control form-control-sm" name="description" rows="4"></textarea>
							</div>
						</div>								
						<button type="submit" class="btn btn-primary btn-md" name="submit" id="submit">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<?php

		if(isset($_POST['send_response'])){
			$request = "UPDATE complaints SET status = 'Done' WHERE complaint_id = '$complaint_id'";
			$runRequest = $db->query($request);
			if($runRequest){
				echo "<script>alert('Thank you for your response!')</script>";
				echo "<script>window.open('complaints.php', '_self')</script>";
			}
		}

		// Insert Data in Complaints
		if(isset($_POST['submit'])){
			$user_id = $id;
			$subject = $_POST['subject'];
			$description = $_POST['description'];
			$complaint_id = bin2hex(random_bytes('6'));
			$addComplaint = "INSERT INTO complaints (user_id,complaint_id,subject,description,status) VALUES ('$user_id','$complaint_id','$subject','$description','Open')";
			$runComplaint = $db->query($addComplaint);
			if($runComplaint){
				$to= 'sksksharma0@gmail.com';
				$msg= "<h3 class='h3-responsive text-justify'>Dear Admin,</h3>";   
				$subject=" New Complaint";
				$headers .= "MIME-Version: 1.0"."\r\n";
		        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		        $headers .= 'From: '.$email."\r\n";
		        $msg.="
		        	<html>
		        		<body>
		        			<div class='container-fluid'></br>";
				$msg.="
								<p style='padding-top:8px;color: #555;font-size: 16px;line-height: 1.7em'>A new complaint has been generated on your website from <b>$firstname $lastname</b> with Complaint ID: <b>$complaint_id</b>. Kindly, look after this complaint and get it resolved as soon as possible. 
								</p>
								<p style='padding-top:8px;color: #555;font-size: 16px;line-height: 1.7em'>
									<a href='http://netmatesolutions.com/green-energy-power/admin/'>Click here</a> to visit your admin section.
								</p>
								
								<p style='padding-top:4px;font-size:18px'> Powered by <a href='http://netmatesolutions.com/green-energy-power/'>Green Energy Power</a>
								</p>
							</div>
						</body>
					</html>";
				mail($to,$subject,$msg,$headers);
				echo "<script>alert('Your complaint has been recorded! We will respond to you shortly with an update.')</script>";
				echo "<script>window.open('complaints.php','_self')</script>";
			}
		}
	?>
<?php include('includes/footer.php'); } ?>