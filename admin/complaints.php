<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>window.open('login.php','_self')</script>";
	}else{
		include('includes/header.php'); 
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
		<h2 class="text-center pb-3" style="font-weight: 400">List of all complaints</h2>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm">
				<thead style="background: #004a6e;color: #fff">
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

<?php include('includes/footer.php'); } ?>