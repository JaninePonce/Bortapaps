<?php
  include '../conn.php';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="BORTAPAPS2.png" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="BORTAPAPS2.png" width="190" height="50" alt="Footcap logo">
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
            <a href="#" class="nav-action-btn">
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

          <style>
            .cart-num {
              background-color: red;
              position: absolute;
              height: 12px;
              width: 12px;
              font-size: 10px;
              padding: 1.5px;
              color: white;
              border-radius: 120px;
              margin-left: 12px;
              margin-bottom: 5px;
            }

            .cart-container {
              position: fixed;
              right: -80vw;
              z-index: 5;
              height: 100%;
              width: 30vw;
              border-left: black solid 2px;
              background-color: #00000A89;  
              backdrop-filter: blur(8px);
              transition: right .5s;
            }

            .show {
              right: 0px;
            }

            h6{
              font-size: 20px;
              font-weight: bold;
              padding-top: 15px;
              left: 10px;
            }
          </style>

          <li>
            <button class="nav-action-btn" id="cart-button">
              <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>
              <?php 
                $sql = "SELECT * FROM carts where userId = 1";
                $result = mysqli_query($conn, $sql);

                if($num_rows = mysqli_num_rows($result) > 0){
              ?>
              <span class="cart-num"><?=$num_rows?></span> 
              <?php } ?>
            </button>
          </li>

        </ul>

      </nav>
    </div>
  </header>

  <style>
    .cart-list {
      background-color: red;
      margin: 20px;
      overflow-x: hidden;
      overflow-y: auto;
      height: 75vh;

      display: flex;
      flex-direction: column;
    }

    .item {
      display: flex;
      flex-direction: row;
      border: solid black 1px;
    }
  </style>

  <div class="cart-container">
  <span class="material-symbols-outlined">close</span>
  <ul class="cart-list">

  <?php 
        $sql = "SELECT * FROM carts INNER JOIN products ON productId = products.id WHERE userId = 1";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
  ?>
          <li class="item">
            <img src="../products/<?= $row['path'] ?>" alt="" height="100px">
            <div class="details">
              <h4 class="name"><?= $row['name']?></h4>
              <h6 class="qty"><?= $row['qty']?></h6>
              <div class="options">
              </div>
            </div>
        </li>
  <?php } ?>
  </ul>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
      cart_container = document.querySelector(".cart-container");

      document.querySelector("#cart-button").addEventListener("click", function(){
        cart_container.classList.toggle("show");
      })


  </script>