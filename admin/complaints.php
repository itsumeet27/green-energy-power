<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>window.open('login.php','_self')</script>";
	}else{
		include('includes/header.php'); 

		$sqlComplaints = "SELECT u.firstname, u.lastname, u.email, c.complaint_id, c.subject, c.description, c.response, c.status FROM complaints c INNER JOIN users u ON u.id = c.user_id";
		$result = $db->query($sqlComplaints);
		while ($row_pro = mysqli_fetch_array($result)) {
		    $complaint_id = $row_pro['complaint_id'];
		    $firstname = $row_pro['firstname'];
		    $lastname = $row_pro['lastname'];
		    $email = $row_pro['email'];
		}

		if(isset($_GET['edit'])){
			$edit_id = $_GET['edit'];
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

		<button type="button" class="btn-primary btn-floating options my-2" data-toggle="modal" data-target="#centralModal"><i class="fas fa-plus-circle"></i></button><span class="text-justify ml-3" style="font-weight: 500; color: #555"><?=((isset($_GET['edit']))?'Edit':'Add');?> Response</span>

		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm">
				<thead style="background: #004a6e;color: #fff">
					<th><i class="fas fa-edit"></i></th>
					<th>Complaint ID</th>
					<th>User Name</th>
					<th>Subject</th>
					<th>Description</th>
					<th>Response</th>
					<th>Status</th>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT u.firstname, u.lastname, c.complaint_id, c.subject, c.description, c.response, c.status FROM complaints c INNER JOIN users u ON u.id = c.user_id ORDER BY status";
						$run = $db->query($sql);
						if(mysqli_num_rows($run) > 0){
							while ($complain = mysqli_fetch_array($run)):
					?>
					<tr>
						<td><a href="complaints.php?edit=<?=$complain['complaint_id'];?>"><i class="fas fa-edit"></i></a></td>
						<td style="font-weight: 400"><?=$complain['complaint_id']; ?></td>
						<td style="font-weight: 400"><?=$complain['firstname']; ?> <?=$complain['lastname']; ?></td>
						<td style="font-weight: 400"><?=$complain['subject']; ?></td>
						<td style="font-weight: 400"><?=$complain['description']; ?></td>
						<td style="font-weight: 400"><?=$complain['response']; ?></td>
						<td style="font-weight: 400"><?=$complain['status']; ?></td>
					</tr>
					<?php endwhile; } ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Provide a response</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
						<div class="form-sm mt-1">
							<label for="response" style="font-weight: 400;color: #555">Response</label>
							<textarea id="response" class="form-control form-control-sm" name="response" rows="4"></textarea>
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
		if(isset($_POST['submit'])){
			$response = $_POST['response'];
			$sqlUpdate = "UPDATE complaints SET response = '$response', status = 'In Progress' WHERE complaint_id = '$complaint_id'";
			$updateComplaint = $db->query($sqlUpdate);
			if($updateComplaint){
				$to= $email;
				$msg= "<h3 class='h3-responsive text-justify'>Dear $firstname $lastname,</h3>";   
				$subject=" Response: For Complaint $complaint_id";
				$headers .= "MIME-Version: 1.0"."\r\n";
		        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		        $headers .= 'From: Green Energy Power <sksksharma0@gmail.com>'."\r\n";
		        $msg.="
		        	<html>
		        		<body>
		        			<div class='container-fluid'></br>";
				$msg.="
								<p style='padding-top:8px;color: #555;font-size: 16px;line-height: 1.7em'>A response has been generated for your complaint id <b>$complaint_id</b>. 
								</p>
								<p style='padding-top:8px;color: #555;font-size: 16px;line-height: 1.7em'>
									<a href='http://netmatesolutions.com/green-energy-power/profile/'>Click here</a> to login. Provide us your feedback if satisfied. 
								</p>
								
								<p style='padding-top:4px;font-size:18px'> Powered by <a href='http://netmatesolutions.com/green-energy-power/'>Green Energy Power</a>
								</p>
							</div>
						</body>
					</html>";
				mail($to,$subject,$msg,$headers);
				echo "<script>alert('Your response has been recorded successfully!')</script>";
				echo "<script>window.open('complaints.php','_self')</script>";
			}
		}
	?>


<?php include('includes/footer.php'); } ?>