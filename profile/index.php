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

<?php include('includes/footer.php'); } ?>