<?php 
require_once dirname(__DIR__)."/../app/database.php";
require_once dirname(__DIR__)."/../include/web.php";

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Syndrox - Bootstrap5 Admin HTML Template</title>
    <meta name="description" content="Syndrox - Bootstrap5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo DOMAIN1 ?>/assets/img/favicon/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo DOMAIN1 ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo DOMAIN1 ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo DOMAIN1 ?>/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo DOMAIN1 ?>/assets/css/default.css">
    <link rel="stylesheet" href="<?php echo DOMAIN1 ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo DOMAIN1 ?>/assets/css/responsive.css">
  </head>
  <body>
    <!-- preloader -->
    <div id="preloader">
      <div id="loader"></div>
    </div>

    <?php require_once "include/_header.php"; ?>
    <main>
      <?php require_once "include/_sidebar.php"; ?>
    
      <div class="content-wraper">
      <div class="container-fluid">