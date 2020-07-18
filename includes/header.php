<?php 
  session_start();
  include('includes/init.php'); 
  $path=$_SERVER['PHP_SELF'];
  $page=basename($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php
      if($path === '/green-energy-power/index.php'){
        echo "Green Energy Power";  
      }elseif($path === '/green-energy-power/about-us.php'){
        echo "About Us | Green Energy Power";  
      }elseif($path === '/green-energy-power/enrollment.php'){
        echo "Enrollment Form | Green Energy Power";  
      }elseif($path === '/green-energy-power/why-us.php'){
        echo "Why Us? | Green Energy Power";  
      }elseif($path === '/green-energy-power/how-it-works.php'){
        echo "How it Works? | Green Energy Power";  
      }elseif($path === '/green-energy-power/privacy-policy.php'){
        echo "Privacy Policy | Green Energy Power";  
      }elseif($path === '/green-energy-power/services.php'){
        echo "Services | Green Energy Power";  
      }elseif($path === '/green-energy-power/terms-and-conditions.php'){
        echo "Terms and Conditions | Green Energy Power";  
      }
    ?>
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: auto;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: auto;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: auto;
      }
    }

    body{
      overflow-x: hidden;
    }
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

    #nav li a{
      color: #555;
      font-weight: 500
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar z-depth-0" style="background-color: #fff;">
    <div class="container">

      <a class="navbar-brand" href="#">
        <img src="img/Logo Design.png" height="80" alt="Green Energy Power Organization">
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" style="color: #555"></i>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto" id="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="about">
              <a class="dropdown-item" href="about-us.php">About Us</a>
              <a class="dropdown-item" href="how-it-works.php">How it Works?</a>
              <a class="dropdown-item" href="why-us.php">Why Us?</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <?php 
              if(!isset($_SESSION['email'])){
                echo '<li class="nav-item">
                        <a href="login.php" class="btn btn-elegant" target="_blank">LOGIN</a>
                      </li>
                      <li class="nav-item">
                        <a href="enrollment.php" class="btn" target="_blank" style="background: #004a6e; color: #fff">ENROLL NOW</a>
                      </li>';
              }
              else{
                echo '<li class="nav-item">
                        <a href="profile/index.php" class="btn btn-elegant" target="_blank">My Profile</a>
                      </li>
                      <li class="nav-item">
                        <a href="profile/logout.php" class="btn btn-default" target="_blank">Logout</a>
                      </li>';
              }
            ?>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
  <main>