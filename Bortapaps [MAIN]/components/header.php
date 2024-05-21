<?php
  include 'connection.php';
  session_start();

  if(!isset($_SESSION['id'])){
    header("Location: users/login.php");
  }

  $_SESSION['wishlist'] = array();

  $result = mysqli_query($conn, "SELECT * FROM user_wishlist WHERE user_id = ".$_SESSION['id']);
  while($row = mysqli_fetch_assoc($result)){
    array_push($_SESSION['wishlist'], $row['product_id']);
  }


?>
  <!-- CSS -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bortapaps Apparel</title>


  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="css/component-style.css" type="text/css">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

</head>
  <!-- CONTENTS -->
<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="resources/headertest.svg" width="200" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="resources/BORTAPAPS2.png" width="190" height="50" alt="Footcap logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <!-- <li class="navbar-item">
            <a href="../items.php?category=New Arrival" class="navbar-link">New Arrivals</a>
          </li> -->

          <li class="navbar-item">
            <a href="items.php?category=Mens" class="navbar-link">Men</a>
          </li>

          <li class="navbar-item">
            <a href="items.php?category=Womens" class="navbar-link">Women</a>
          </li>

          <li class="navbar-item">
            <a href="items.php?category=Accessories" class="navbar-link">Accesories</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About Us</a>
          </li>

        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn search-button">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
              <span class="nav-action-text">Search</span>
            </button>
          </li>

          <li>
            <a href="user-page.php" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>

          <li>
            <button class="nav-action-btn wishlist-button">
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Wishlist</span>
            </button>
          </li>

          <li class="user-cart">
            
          </li>

        </ul>

      </nav>
    </div>
  </header>

  <?php 
    include 'modals.php';
  ?>