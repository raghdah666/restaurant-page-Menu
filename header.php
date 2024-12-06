<?php


define('ENVIRONMENT', 'development');

switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
		ini_set('log_errors',0);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		ini_set('log_errors',1);
		ini_set("error_log","error.log");
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

// define current directory as base path
chdir(dirname(__DIR__));
$base_path = __DIR__;
define('BASEPATH', $base_path);

try {
    if (!file_exists($base_path."/config/config.php"))
        throw new Exception ('Web page not available');
	else
		// laod configuration file
		$config = require_once($base_path.'/config/config.php');
		
}
catch(Exception $e) {    
    die($e->getMessage());
}

// laod data file
$data = simplexml_load_file($base_path."/data/menu.xml") or die("Menu non disponibile");
$specials = simplexml_load_file($base_path."/data/specials.xml") or die("specials Menu non disponibile");

$categories = [];
$menu = [];

//fill categories
foreach($data as $elem) {
	if(!in_array($elem->category,$categories)) {
		array_push($categories,(string)$elem->category);
	}
	$json = json_encode($elem);
	$menu[(string)$elem->category][] = json_decode($json, TRUE);
}
//fill specials
// قراءة البيانات من ملف specials.xml
$specialmenu = []; // تأكد من استخدام متغير مختلف لتجنب التداخل

foreach ($specials as $elem) { 
    if (!in_array((string)$elem->specials, $specialmenu)) {
        array_push($specialmenu, (string)$elem->specials);
    }
    $json = json_encode($elem);
    $specialmenu_data[(string)$elem->specials][] = json_decode($json, TRUE); 
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Günaydin | Resturant & Coffe</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/stylized_leaf_ic_2light.png" rel="icon">
  <link href="assets/img/stylized_leaf_ic_2light.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= $client['email'] ?>"><?= $client['email'] ?></a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:<?= $client['phone'] ?>"><span><?= $client['phone'] ?></span></i>
        </div>
        <div class="languages d-none d-md-flex align-items-center">
          <ul>
            <li><a href="#" id="dark-mode-btn" class="d-none"><i class="bi bi-moon-fill"></i></a></li>
            <li><a href="#" id="light-mode-btn" class="d-none"><i class="bi bi-brightness-low-fill"></i></a></li>
          </ul>
        </div>

      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <img src="assets/img/stylized_leaf_ic_2light.png" class="sitename">
          <!-- <h1 class="sitename">Günaydin Resturant</h1> -->
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="location.php">Location</a></li>

          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>

      </div>

    </div>

  </header>

  <main class="main">