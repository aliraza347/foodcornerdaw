<?php
  $orderSL = 0;
  if(isset($_SESSION['cart'])){
    $orderSL = count($_SESSION['cart']);
  }else{
    $orderSL = 0;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Corner</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="./assets/img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/helpers.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/restaurant.css">
  <meta name="robots" content="noindex, nofollow">

</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark pb_navbar" id="pb-navbar">
    <div class="container">
      <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="index.php">
        <img src="./assets/img/logo.png" alt="Instant Logo" class="light">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
        aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span style="margin-left: -50px;"><i class="ion-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="shop.php">Shop</a>
          </li>
          <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="about.php">About Us</a>
          </li>
          <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
            <a class="nav-link text-uppercase pb_letter-spacing-2" href="index.php">
              <img src="./assets/img/logo.png" alt="Instant Logo" class="">
            </a>
          </li>
          
          <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="#"><i
                class="fa fa-user"></i></a>
          </li>
          <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2" href="payment.php"><i
                class="fa fa-shopping-cart"></i><span id="orderNumber" style='font-size: 35px;padding-left: 5px;'><?php echo $orderSL;?></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
