<?php 

  session_start();
  define("APPURL", "http://localhost/wooxtravel");

  
  //images dirs
  define("COUNTRIESIMAGES", "http://localhost/wooxtravel/admin-panel/countries-admins/images_countries");
  define("CITIESIMAGES", "http://localhost/wooxtravel/admin-panel/cities-admins/images_cities");

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx Travel</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo APPURL; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/modern-style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="modern-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="modern-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?php echo APPURL; ?>" class="logo">
                        <img src="<?php echo APPURL; ?>/assets/images/logo.png" alt="WoOx Travel Logo">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?php echo APPURL; ?>" class="modern-nav-link active">Home</a></li>
                        <li><a href="<?php echo APPURL; ?>/deals.php" class="modern-nav-link">Deals</a></li>
                        <?php if(isset($_SESSION['username'])) : ?>
                          <li class="nav-item dropdown">
                            <a class="modern-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <?php echo htmlspecialchars($_SESSION['username']); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="<?php echo APPURL; ?>/users/user.php?id=<?php echo htmlspecialchars($_SESSION['user_id']); ?>">Your Bookings</a></li>
                              <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
                            </ul>
                          </li>
                        <?php else : ?>  
                          <li><a href="<?php echo APPURL; ?>/auth/login.php" class="modern-nav-link">Login</a></li>
                          <li><a href="<?php echo APPURL; ?>/auth/register.php" class="modern-nav-link">Register</a></li>
                        <?php endif; ?>  
                    </ul>   
                    <button class='menu-trigger' aria-label="Toggle Menu">
                        <span></span>
                    </button>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Scripts -->
  <script src="<?php echo APPURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo APPURL; ?>/assets/js/mobile-menu.js"></script>
</body>
</html>