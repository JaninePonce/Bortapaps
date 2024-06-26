<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2nd Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
 
  
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
  

</head>

<body id="top" style="
overflow-x: hidden;
">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="BORTAPAPS2.png" width="160" height="50" alt=" Bortapaps">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="BORTAPAPS2.png" width="190" height="50" alt="Bortapaps">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="/Bortapaps2/index.html" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">New Arrivals</a>
            <ul class="dropdown-list">
              <img src="/mens wear.jpg" alt="menswear" style="display: flex;position: absolute;width: 15vw;top: 2vh;left: 32vw;">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
            </ul>
          </li>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Men</a>
            <ul class="dropdown-list">
              <img src="/menswear2.jpg" alt="menswear2" style="display: flex;position: absolute;width: 15vw;top: 2vh;left: 32vw;">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
            </ul>
          </li>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Women</a>
            <ul class="dropdown-list">
              <img src="/mens wear.jpg" alt="mens1" style="display: flex;position: absolute;width: 15vw;top: 2vh;left: 32vw;">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
            </ul>
          </li>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Accesories</a>
            <ul class="dropdown-list">
              <img src="/menswear2.jpg" alt="mens2" style="display: flex;position: absolute;width: 15vw;top: 2vh;left: 32vw;">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
            </ul>
          </li>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About Us</a>
            <ul class="dropdown-list" style="position: absolute;width: 20vw;left: -6vw;">
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
            </ul>
          </li>
          </li>

        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn">
             

          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"style="position: relative;padding: 0;margin: 0;background-color: transparent;top: -1vh;border: none;font-size: 22px;"> <ion-icon name="search-outline" aria-hidden="true" ></ion-icon>

              <span class="nav-action-text">Search</span>
            </button>
          </li>


          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="position: fixed;width: 32vw;background-color: #2b2a2a;opacity: 89%;">
            <div class="offcanvas-header">              
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="position: relative;left: 1vw;top: 5vh;font-size: 22px;color: rgb(216, 218, 218);"></button>
            </div>
           <div class="body">
            
      <input type="texts" name="search" placeholder="What are you looking for.." style=" position: relative;height: 7vh;width: 26vw;left: 4vw;top: -1vh;padding: 1vw;  ">
         
      <span style="position: relative;width: 16vw;height: 33vh;left: 4vw;top: 1vh;display: flex;justify-content: space-around;flex-direction: column;font-size: 22px; font-size: 22px;color: #e5e0e0;">
        <p class="popular-categoriess">Popular Categories</p> 
        <a href="#">Women's Wardrobe</a>
        <a href="#">Men's Wardrobe</a>
        <a href="#">Accesories</a>
        <p>Top Choice Categories</p></span>
   <div class="searchimg"style="position: relative;display: flex;justify-content: space-between;padding: 2vh;">
        <img src="/menswear2.jpg" alt="mens2" style=" height: 37vh;width: 14vw;">
   
      <img src="/mens wear.jpg" alt="mens1" style=" height: 37vh;width: 14vw;">
   </div>
   <span style="position: relative;left: 2vw;width: 9vw;color: #e9e4e4;"><p>Valoy</p>  
    <span style="color: gold;position: relative;margin-bottom: 1vw;">
      <i class="fa fa-star checked"></i>
    <i class="fa fa-star checked"></i>
    <i class="fa fa-star checked"></i>
    <i class="fa fa-star checked"></i>
    <i class="fa fa-star checked"></i>
  </span>
    <p>Php 500</p> </span>
    <span style="position: relative;top: -12vh;left: 18vw;width: 9vw;color: #e9e4e4;"><p>Blezzzz</p>  
      <span style="color: gold;position: relative;margin-bottom: 1vw;">
        <i class="fa fa-star checked"></i>
      <i class="fa fa-star checked"></i>
      <i class="fa fa-star checked"></i>
      <i class="fa fa-star checked"></i>
      <i class="fa fa-star checked"></i>
    </span>
      <p>Php 500</p> </span>
    </div>
            </div>
          


          <li>
            <a href="#" class="nav-action-btn">
              <button onclick="document.getElementById('id01').style.display='block'"> <ion-icon name="person-outline" aria-hidden="true"></ion-icon> </button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
   

    <div class="container">
      <span style="position: absolute;display: flex;justify-content: space-between;width: 15vw;left: 14vw;top: 8vh;font-size: 27px;"><p>LOGIN</p>  <p>OR</p>   <p>Register</p></span>  
      <div class="login-signup" style="position: relative;display: flex;flex-direction: column;justify-content: space-between;width: 31vw;left: 5vw;top: 14vh;">
      <input type="text" placeholder="Enter Username" name="uname" required style="position: relative;margin-bottom: 3vh;border: 1px solid;height: 9vh;padding: 14px;">

      <input type="password" placeholder="Enter Password" name="psw" required style="position: relative;margin-bottom: 5vh;border: 1px solid;height: 9vh;padding: 14px;">
    </div>

    <div class="button" style="width: 31vw;left: 6vw;top: 23vw;position: absolute;display: flex;height: 8vh;justify-content: center;background-color: rgb(0, 0, 0);font-size: 23px;align-items: center;"><a href="index.html" style="color: #ffffff; position: absolute;">Login</a></button></div> 
      <label>
        <input type="checkbox" checked="checked" name="remember" style="position: relative;display: flex;width: 10vw;top: 242px;left: -30vw;"> <p style="position: relative;top: 25vh;left: -24vw;font-size: 20px;">Remember me</p></label>
    </div>
    <span class="psw" style="font-size: 19px;position: relative;left: 28vw;top: 7vh;display: flex;">Forgot <a href="#" style="position: relative;margin-left: 1%;">Password ? </a></span>
    <hr style="position: relative;top: 25vh;left: 6vw;width: 31vw;color: grey;opacity: 17%;">
    <span style="position: relative;width: 7vw;height: 8vh;top: 24vh;left: 18vw;background: white;display: flex;justify-content: center;">or Login with</span>

     
  </form>
</div>
              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>



          <li>
            <button class="nav-action-btn">
              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="position: relative;background: transparent;padding: 0%;border: 0;font-size: 139%;top: -1vh;display: flex;"><ion-icon name="heart-outline" aria-hidden="true"></ion-icon></button>

              <span class="nav-action-text">Wishlist</span>
              
              <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="visibility: visible;position: fixed;width: 566px; ">
                <div class="offcanvas-header" >

                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body" style="overflow: hidden;">
                  <p style="
                  position: relative;
                  font-size: 55px;
                  left: 1vw;
                  padding: 7px;
              "
              >Wishlist</p>
              
                 <div class="wishlist-container" style="
                 position: relative;
                 display: flex;
                 justify-content: center;
                 align-items: center;
                 width: 30vw;
                 height: 13vh;
                 padding: 1vh;
                 border: 1px solid;
             ">
                  <input type="checkbox" name="procuct" style="
                  position: relative;
                  left: -11vw;
                  height: 3vh;
              ">
                  <img src="/mens wear.jpg" alt="wishlistprod"  style="
                  position: relative;
                  height: 5vw;
                  display: flex;
                  justify-content: space-between;
                  left: -22vw;
                 
              ">
            <span style="
            position: absolute;
        ">  <p>Valoy Sweatshirt #1233756</p>
              <p>Php 500</p> </span>
              </div>
              <div class="wishlist-checkout" style="position: relative;width: 32vw;height: 25vh;display: flex;justify-content: center;align-items: center;top: 45vh;left: -1vw;border-top: 1px solid grey;">
                <span style="
                position: absolute;
                display: flex;
                top: 2vh;
                justify-content: space-between;
                width: 26vw;
                font-size: 19px;
            "><p>Sub Total</p> <p>Php 0</p></span>
                <button style="
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 154%;
                height: 9vh;
                width: 21vw;
                background-color: black;
            "><p style="color: #ffffff;">Add to Cart</p></button>
                 </div>

                
                </div>
              </div>
                

            </button>
          </li>

          <li>
            <button class="nav-action-btn">
              <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop" style="
              position: relative;
              background: transparent;
              padding: 0%;
              font-size: 21px;
              border: 0;
              top: -21%;
          ">  <ion-icon name="bag-outline" aria-hidden="true" ></ion-icon> </button>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel" style="visibility: visible;position: fixed;width: 566px;">
              <div class="offcanvas-header">
                
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <p style="
                position: relative;
                font-size: 55px;
                left: 1vw;
                padding: 7px;
            ">Shopping Bag</p>

                <div class="wishlist-container" style="
                 position: relative;
                 display: flex;
                 justify-content: center;
                 align-items: center;
                 width: 30vw;
                 height: 13vh;
                 padding: 1vh;
                 border: 1px solid;
             ">
                  <input type="checkbox" name="procuct" style="
                  position: relative;
                  left: -11vw;
                  height: 3vh;
              ">
                  <img src="/mens wear.jpg" alt="wishlistprod"  style="
                  position: relative;
                  height: 5vw;
                  display: flex;
                  justify-content: space-between;
                  left: -22vw;
                 
              ">
            <span style="
            position: absolute;
        ">  <p>Valoy Sweatshirt #1233756</p>
              <p>Php 500</p> </span>
              </div>
              <div class="wishlist-checkout" style="position: relative;width: 32vw;height: 25vh;display: flex;justify-content: center;align-items: center;top: 45vh;left: -1vw;border-top: 1px solid grey;">
                <span style="
                position: absolute;
                display: flex;
                top: 2vh;
                justify-content: space-between;
                width: 26vw;
                font-size: 19px;
            "><p>Sub Total</p> <p>Php 0</p></span>
                <button style="
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 154%;
                height: 9vh;
                width: 21vw;
                background-color: black;
            "><p style="color: #ffffff;"> Review+Check out</p></button>
                 </div>
                </div>
              </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->
 
<section>
    <div class="contaner-hero" style="width: 100vw;height: 44vh;background-color: rgb(0, 0, 0);display: flex;justify-content: center;">
   <span style="
   position: relative;
   align-items: center;
   font-size: 69px;
   top: -7vh;
   display: flex;
"></span>
<img src="/Bortapaps2/banner.jpg" alt="banner" style="position: relative;
    display: flex;
    width: 207vh;">
    </div>
</section>
     


<section>
    <div class="navbar-filter" style="width: 100vw; height: 13vh; background-color: white;">
        <span class="filter" style="font-size:30px;cursor:pointer;position: relative;height: 61px;width: 8vw;display: flex;align-items: center;justify-content: center;padding: 1vh;top: 2vh;left: 2vw;border: 1px solid black;z-index: 2;" onclick="openNav()">Filter</span>
       
        <div class="show"style="
        position: relative;
    display: flex;
    top: -5vh;
    left: 75vw;
    align-items: center;
    ">
            <p style="
            font-size: 20px;
        ">SHOW:</p>
            <select id="qty" name="qty" style="
            position: relative;
            left: 2vw;
            height: 57px;
            width: 4vw;
            display: flex;
            justify-content: space-between;
            border-radius: 6%;
            padding: 1vh;
        ">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
        </div>


    </div>
    </div>
</section>
      <!-- 
        - #PRODUCT
      -->
      <div class="section_scroll">

     
      <section class="section product">

        <div id="main">
        <div class="container">
            <div class="sorted"style="
           position: relative;
    display: flex;
    top: -20vh;
    left: 2vw;
    align-items: center;
    width: 20vw;

        ">
                <p style="
                font-size: 20px;
            ">SORT BY:</p>
                <select id="qty" name="qty" style="
                position: relative;
    left: 2vw;
    height: 61px;
    width: 11vw;
    display: flex;
    justify-content: space-between;
    border-radius: 6%;
    padding: 1vh
            ">
                  <option value="1">Deafult Sorting</option>
                  <option value="2">Sort by  Popularity</option>
                  <option value="3">Sort by Average Rating</option>
                  <option value="4">Sort by Latest</option>
                  <option value="5">Sort by Eme</option>
                </select>
            </div>


          <h2 class="h2 section-title">Bests Selling</h2>


          <ul class="product-list">
            <?php
            $result = mysqli_query ($conn, "SELECT * FROM products LIMIT 12");
            while ( $row =mysqli_fetch_assoc($result)){
            ?>

            <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="/products/<?=$row['path']?>" width="312" height="350" loading="lazy"
                  class="image-contain" data-bs-toggle="modal" data-bs-target="#myModal" alt="Your Image"> 

                  <div class="card-badge">New</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-4">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-4">Compare</div>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <div class="card-cat">
                    <a href="#" class="card-cat-link"><?=$row['category']?></a> 
                    
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#"><?=$row['name']?></a>
                  </h3>

                  <data class="card-price" value="180.85"><?=$row['price']?></data>

                </div>

              </div>
            </li>
          <?php
         } 
         ?>
          </div>

          <div class="showing-products">
            <h2>Showing 1–12 of 24 Products</h2>
            <a href="#" class="previous" style="left: 4vw;">&laquo; Previous</a> 
           <span class="nextnumber">
            <p>1</p>
            <p>2</p>
            </span>
<a href="#" class="next" style="width: 11vh;left: -41vh;">Next &raquo;</a>
</div>

<!-- Modal -->
<div class="pushed-right">
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-bs-backdrop="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="
    position: relative;
    width: 111vh;
    left: -3vw;
    top: 6vh;
">
      <div class="modal-header" style="
      position: relative;
      border: none;
  ">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="
        position: relative;
        font-size: 27px;
        left: -1vw;
        top: 2vh;
    "></button>
      </div>
      <div class="modal-body">
        <!-- Your modal content -->
        <div class="content-popup">
          <img id="modal-img" src=" " class="modal-img" alt="modal-img" style="
          position: relative;
          top: -1vh;
          width: 24vw;
          left: 1vw;
      ">
          <div class="card-cntnt" style="
          position: relative;
          width: 30vw;
          left: 55vh;
          top: -60vh;
          font-size: 15px;
      ">
          <h4 class="h4 card-title" style="
         
          position: relative;
          font-size: xxx-large;
          left: 4vw;
          top: -4vh;
          margin: -3vh;
      ">VALOY CASUAL</h4>
            <div class="NO"style="
            position: relative;
            justify-content: space-between;
            display: flex;
            width: 22vw;
            flex-wrap: wrap;
            flex-direction: row;
            left: 1vw;
        ">
              <span style="
              font-size: 13px;
          ">NO: 09123456798787276767 </span> 
              <span style="
              font-size: 13px;
          ">Category: Women's Clothing</span>
              <data class="card-pr" style="
              top: 5vh;
              position: absolute;
              font-size: 38px;
          color: green;">Php 300.000 <del style="color:red;font-size: 28px; ">Php 500.000</del></data>
              <div class="card-rating" style="
              position: absolute;
              color: gold;
              top: 13vh;
          ">   
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <div class="star">
                  <span><p style="color: #2b2a2a;"> (100 reviews)</p></span>
                </div>
              </div>
              <section class="description" style="
              position: relative;
              top: 18vh;
          ">
                <h6 class="h6 description-heading" style="
                font-size: 17px;
                position: relative;
                text-align: justify;
            ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi officiis, 
                  temporibus aliquam in exercitationem libero ratione possimus laboriosam doloremque ea veritatis omnis ducimus 
                  vel atque odio cupiditate rem. Ipsa, minima.</h6>
              </section>
            </div>
          </div>
           <div class="sizess" style="
           top: -41vh;
           position: relative;
           left: 58vh;
       ">Sizes:</div>
          <div class="size-sel"style="
          position: relative;
          display: flex;
          justify-content: space-between;
          width: 17vw;
          top: -39vh;
          left: 30vw;
      ">
            <button class="size-bt">S</button>
            <button class="size-bt">M</button>
            <button class="size-bt">L</button>
            <button class="size-bt">XL</button>
            <button class="size-bt">XXL</button>
          </div>
          <hr>
          <div class="qty-selection"style="
          position: relative;
          display: flex;
          justify-content: space-between;
          top: -35vh;
          width: 46vh;
          left: 28vw;
          align-items: center;
      ">
            <label for="qty">QTY</label>
            <select id="qty" name="qty" style="
            position: absolute;
            left: 2vw;
            height: 3vw;
            width: 3vw;
            display: flex;
            justify-content: space-between;
        ">
              <option value="1">0</option>
              <option value="2">1</option>
              <option value="3">2</option>
              <option value="4">3</option>
              <option value="5">4</option>
            </select>
            <div class="add-btn" style="
            position: relative;
            left: 2vw;
            display: flex;
            width: 10vw;
            height: 6vh;
            justify-content: center;
            background-color: gray;
            color: white;
        ">
              <button class="add-to-cart-btn">Add to Cart</button>
            </div>
            <div class="heart">
              <i class="fa fa-heart-o" style="font-size:36px;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
</div>

        </div>
          </ul>


          <div id="mySidenav" class="sidenav">
            <span class="Filter-contents"style="
            position: relative;
            top: 7vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            left: 1vw;
            width: 48vh;
            align-content: space-between;
        ">
            
         <!-- FILTER MENU -->
          <div class="widget-title">
            <h1>Product Categories</h1>
          </div>
         <div class="FilterMenu">
         <div class="accordion" id="accordionPanelsStayOpenExample">
         <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
       Accessories
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
       <p>Keychains</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
       Clothes
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <p>Valoy</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Bags & Shoes
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <p>Valoy Shoes</p>
      </div>
    </div>
  </div> 
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
        Accesories
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
      <div class="accordion-body">
        <p>Valoy</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
        Hat
      </button>
    </h2>
    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
      <div class="accordion-body">
        <p>Valoy</p>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
        Shirts
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
      <div class="accordion-body">
        <p>Valoy</p>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
        Pants
      </button>
    </h2>
    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
      <div class="accordion-body">
        <p>Valoy</p>
      </div>
    </div>
  </div>
</div>

  <hr style="height: 4px;
    color: white;
    position: relative;
    top: 20px;
    margin-bottom: 29px;">
  <div class="widget-title">
            <h1>Sizes</h1>
          </div>
          <div class="form-group">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Small
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Medium
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Large
  </label>
</div>

</div>

<hr style="height: 4px;
    color: white;
    position: relative;
    top: 20px;
    margin-bottom: 29px;">

<div class="widget-title">
            <h1> Brand</h1>
          </div>
          <div class="form-group">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Channel
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Gucci
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Luis Vuitton
  </label>
</div>

</div>


</div>



          </div>
        </span>
          
        </div>
          
        </div>
      </section>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="BORTAPAPS2.png" width="160" height="50" alt="Footcap logo">
          </a>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li>
              <address class="footer-link">
                <ion-icon name="location"></ion-icon>

                <span class="footer-link-text">
                 1234  Sabang, Danao, Phillipines
                </span>
              </address>
            </li>

            <li>
              <a href="tel:+557343673257" class="footer-link">
                <ion-icon name="call"></ion-icon>

                <span class="footer-link-text">+557343673257</span>
              </a>
            </li>

            <li>
              <a href="mailto:footcap@help.com" class="footer-link">
                <ion-icon name="mail"></ion-icon>

                <span class="footer-link-text">Bortapaps.com</span>
              </a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">My Account</p>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">My Account</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">View Cart</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">Wishlist</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">Compare</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">New Products</span>
              </a>
            </li>

          </ul>

          <div class="footer-list">

            <p class="footer-list-title">Costumer Service</p>

            <table class="footer-table">
              <tbody>

                <tr class="table-row">
                  <th class="table-head" scope="row">Payment Methods</th>
            
                <tr class="table-row">
                  <th class="table-head" scope="row">Money-back Guarantee!</th>
            
                <tr class="table-row">
                  <th class="table-head" scope="row">Custom Service</th>

                <tr class="table-row">
                  <th class="table-head" scope="row">Terms & Conditions</th>

              </tbody>
            </table>

          </div>

          <div class="footer-list">

            <p class="footer-list-title">Message Us!</p>

            <p class="newsletter-text">
              Let us know your thoughts on our products and services.-eme- 
            </p>

            <form action="" class="newsletter-form">
              <input type="email" name="email" required placeholder="Email Address" class="newsletter-input">

              <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>

          </div>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">Bortapaps</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top-btn" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
</body>

</html>