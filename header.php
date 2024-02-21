<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt Website</title>

    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <!-- Owl-Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="card4.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="product.css">

    <?php
      //require functions php file
      require('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Jordan Calderon 430-985 Eleifend St. Duluth Washington 92611 (427) 930-5255</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Whishlist(0)</a>
            </div>
        </div>
    </header>
      <!-- !start #header -->

    <!--Primary Navigation  -->
    <nav class="navbar navbar-expand-lg d-flex">
      <div id="logo">
        <img src="./assets/logo/2.png" class="img-fluid img-1" alt="MealSaver.com">
        <img src="./assets/logo/test1.png" class="img-fluid img-2" alt="MealSaver.com">
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon font-rale font-size-12" style="color: white;"><i class="fa-regular fa-square-caret-down"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="mx-md-3 pb-2" href="index.php">Home</a></li>
          <li class="nav-item"><a class="mx-md-3 pb-2" href="#footer">About</a></li>
          <li class="nav-item"><a class="mx-md-3 pb-2" href="allproduct.php">Product</a></li>
          <li class="nav-item"><a class="mx-md-3 pb-2" href="Monkey-login/Login.php">Account</a></li>
          <li class="nav-item"><a class="mx-md-3 pb-2" href="#footer">Contact</a></li>
        </ul>
        <br>
      </div>
        <form action="#" class="font-size-14 font-rale me-lg-5">
          <a href="cart.php" class="py-2 rounded-pill" style="background-color:#00A5C4;">
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
          </a>
        </form>

    </nav>

    <!--!Primary Navigation  -->


<!-- start #main-site -->
    <main id="main-site">
        