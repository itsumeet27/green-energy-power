<?php 
  include('includes/header.php'); 
?>
  <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          <strong>EMAIL VERIFICATION</strong>
          <hr class="my-4" style="width: 125px;border-color: #fff;border-width: 2px;border-radius:20px;border-style: solid;">
        </h1>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?php
      if(!empty($_GET['code']) && isset($_GET['code'])){
        $code=$_GET['code'];
        $sql = $db->query("SELECT * FROM users WHERE activationcode='$code'");
        $num = mysqli_fetch_array($sql);
        if($num>0){  
          $status = 0;
          $result = $db->query("SELECT id FROM users WHERE activationcode='$code' and status='$status'");
          $result4 = mysqli_fetch_array($result);    
          if($result4>0){
            $status = 1;
            $result1 = $db->query("UPDATE users SET status='$status' WHERE activationcode='$code'");
          ?>
            <h3 class="h3-responsive text-center green-text py-4">Registered Successfully!</h3>
            <p class="lead p-3 text-center">Your account is activated! For login <a href="login.php" class="btn btn-md btn-success">Click Here</a></p>
          <?php
            }else{
          ?>
            <h3 class="h3-responsive text-center blue-text py-4">Already Registered!</h3>
            <p class="lead p-3 text-center">Your account is already active! For login <a href="login.php" class="btn btn-md btn-success">Click Here</a></p>
          <?php
            } 
          }else{
          ?>
            <h3 class="h3-responsive text-center text-danger py-4">Wrong Activation Code!</h3>
            <p class="lead p-3 text-center">Your account not activated, please try again! For enrollment <a href="enrollment.php" class="btn btn-md btn-success">Click Here</a></p>
          <?php            
        }
      }
    ?>
  </div>

<?php include('includes/footer.php');?>