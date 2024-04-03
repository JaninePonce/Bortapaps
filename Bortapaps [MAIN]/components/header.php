<?php
  include 'connection.php';
?>
  <!-- CSS -->
<link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- CONTENTS -->
<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="./resources/BORTAPAPS2.png" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./resources/BORTAPAPS2.png" width="190" height="50" alt="Footcap logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">New Arrivals</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Men</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Women</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Accesories</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About Us</a>
          </li>

        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Search</span>
            </button>
          </li>

          <li>
            <a href="./users/logout.php" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Wishlist</span>
            </button>
          </li>

          </style>

          <li class="user-cart">
            
          </li>

        </ul>

      </nav>
    </div>
  </header>

  <div class="cart-bar"></div>