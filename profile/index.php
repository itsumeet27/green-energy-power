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
		    $email = $row_pro['email'];
		    $service = $row_pro['service'];
		    $plan = $row_pro['plan'];
		    $avg_units_used = $row_pro['avg_units_used'];
		    $electricity_number = $row_pro['electricity_number'];
		    $conn_area_code = $row_pro['conn_area_code'];
		    $district = $row_pro['district'];
		    $area_place = $row_pro['area_place'];
		}
?>

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
	<div class="container-fluid profile-details my-4">
		<h3 class="text-center pb-4">Profile Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-sm">
				<thead style="background: #004a6e;color: #fff">
					<th>Full Name</th>
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
						<td style="font-weight: 400"><?=$firstname; ?> <?=$lastname; ?></td>
						<td style="font-weight: 400"><?=$email; ?></td>
						<td style="font-weight: 400"><?=$service; ?></td>
						<td style="font-weight: 400"><?=$plan; ?></td>
						<td style="font-weight: 400"><?=$avg_units_used; ?></td>
						<td style="font-weight: 400"><?=$electricity_number; ?></td>
						<td style="font-weight: 400"><?=$conn_area_code; ?></td>
						<td style="font-weight: 400"><?=$district; ?></td>
						<td style="font-weight: 400"><?=$area_place; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	

<?php include('includes/footer.php'); } ?>