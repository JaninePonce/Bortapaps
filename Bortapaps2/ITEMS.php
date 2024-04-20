<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    body{
        width: 100dvw;  
        height: 100dvh;
        background-color: #FFFFFF;
        overflow-x: hidden;
        font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
    }
    header{
        width: 100dvw;
    height: 15dvh;
    background-color: #FFFFFF;
    left: -1dvw;
    position: relative;
    top: -1dvh;
    border-bottom: 1px solid #ccc8c8;
    margin: 23px;
    }
    #logo{
        position: relative;
    width: 21dvw;
    height: 17dvh;
    top: -3dvh;
    }
.side_select{
    width: 16dvw;
    height: 80dvh;
    background-color: #FFFFFF;
    margin: 0;
    position: relative;
    left: -1dvw;
    top: -1dvh;
    display: flex;
}
#side_select{
    position: absolute;
    width: 130px;
    left: 76px;
    top: 22px;

}
#side_select:hover{
    border: 1px solid;
    background-color: #444;
}
.side_option{
    width: 43dvw;
    height: 123dvh;
    background-color: #FFFFFF;
    margin: 0;
    position: relative;
    left: 56dvw;
    top: -999px;
}
h1 {
    position: relative;
    display: flex;
    justify-content: flex-start;
    top: 9dvh;
    left: 6dvw;
    font-size: 330%;
    width: 518px;
    line-height: 1;
}
#price{
    position: relative;
    display: flex;
    justify-content: flex-start;
    top: 7dvh;
    left: 119px;
    font-size: 253%;
}
h2{
    position: relative;
    top: 46px;
    font-weight: 300;
    left: 119px;
}
span{
    position: relative;
    left: 117px;
    font-size: 27px;
    line-height: 0;
    top: 44px;
}
hr{
    position: relative;
    top: 72px;
    width: 38dvw;
    color: black;
}
#sizes{
    position: relative;
    top: 12vh;   
}
button{
    position: relative;
    width: 105px;
    height: 71px;
    font-size: 22px;
}
.sizes_button{
    position: relative;
    top: 20px;
    display: flex;
    justify-content: space-between;
    width: 347px;
    
}

.quantity{
    position: relative;
    left: 550px;
    display: flex;
    top: 9px;
    flex-direction: column;
    justify-content: space-between;
    height: 111px;
    font-size: 22px;
}
select{
    position: relative;
    width: 89px;
    height: 64px;
    font-size: 22px;
    display: flex;
    padding: 15px;
    justify-content: center;
}
#cartButton{
    position: relative;
    left: 60px;
    width: 660px;
    top: 90px;
}
#cartwishlist{
    position: relative;
    left: 60px;
    width: 327px;
    top: 110px;
}
#share{
    position: relative;
    left: 118px;
    top: 151px;
    font-size: 24px;
    font-weight: 500;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.icon{
    position: relative;
    top: 157px;
    left: 120px;
    display: flex;
    justify-content: space-between;
    width: 205px;
}
.item_picture{
    position: relative;
    left: 326px;
    top: 6px;
}
#product_item{
    position: relative;
    width: 659px;
    height: 699px;
}
#description{
    position: absolute;
    display: flex;
    top: 915px;
    left: 23px;
    font-size: 38px;
}
#id{
    position: absolute;
    width: 120px;
    font-size: 22px;
    top: 918px;
    left: 829px;
    font-weight: 300;
    line-height: 1;
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}
.active, .accordion:hover {
  background-color: #ccc;
}
.panel {
  padding: 0 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}
.gen_accor{
    position: relative;
    width: 1004px;
    top: 131px;
}
#reviews{
    position: absolute;
    display: flex;
    top: 93px;
    left: -102px;
    font-size: 38px
}
#rev{
    position: relative;
    top: 140px;
    left: 82px;
}
#write{
    position: relative;
    width: 393px;
    top: 243px;
    left: 15px;
}
.viewed_products{
    position: relative;
    width: 100dvw;
    height: 100dvh;
    background-color: #FFFFFF;
    top: -93dvh;
}
#viewed{
    position: relative;
    width: 600px;
    display: flex;
    justify-content: center;
    left: 587px;
}

</style>
<body>
   <header>
    <img id="logo" src="/Bortapaps2/1.svg" alt="banner">
   </header>
   <div class="side_select">
    <img id="side_select"src="/Bortapaps [MAIN]/products/men bomber jacket.jpg" alt="product">
   <div class="item_picture">
   <img src="/Bortapaps [MAIN]/products/men bomber jacket.jpg" alt="product" id="product_item">
</div>
   </div>
   <div class="description">
    <h1 id="description">DESCRIPTION</h1>
    <p id="id">Product ID: 467015</p>
   </div>
   
   <div class="gen_accor">
   <button class="accordion">Overview</button>
<div class="panel">
  <p>New LifeWear that combines BORTAPAPS's focus on design, fit, fabric, and functionality with JW ANDERSON’s focus on traditional British apparel into innovative designs.

- 100% cotton.
- A drawstring in the hem lets you adjust the silhouette.
- Large pockets.
- An oversized jacket, perfect for casual styling.
- Buttons up for a stand collar style.</p>
</div>

<button class="accordion">Materials</button>
<div class="panel">
  <p>Product ID 467015
Please note that this product may have different product ID, even if it is the same item.
FABRIC DETAILS
100% Cotton
WASHING INSTRUCTIONS
Machine wash cold, gentle cycle, Dry Clean, Do not tumble dry.
- The images shown may include colors that are not available.</p>
  </div>
</div>
<div class="review">
    <span><h1 id="reviews">REVIEWS</h1><p id="rev">(0)</p></span>
    <hr style="top: 200px;left: -407px;width: 967px;">
    <button id="write">WRITE A REVIEW</button>
</div>

   <div class="side_option">
        <h1>Light Cotton Oversized Jacket</h1>
        <h1 id="price">PHP 2,990.00</h1>
        <h2>New Limited Store Exclusive!</h2><br>
        <span><p>Oversized cut for a laid-back style. </p>
        <p>Drawstring hem lets you adjust the silhouette</p></span>
        <hr>
        <span id="sizes">Sizes: 
            <div class="sizes_button">
            <button>L</button> 
            <button>M</button> 
            <button>S</button> 
            </div>
        </span>
        <div class="quantity">
        <label for="quantity">Quantity:</label>
        <select>
  <option value="0">1</option>
  <option value="1">2</option>
  <option value="2">3</option>
</select>
</div>
<button onclick="addToCart()" id="cartButton">Add to Cart</button>
<button onclick="addToCart()" id="cartwishlist">Add to Wishlist</button>
    <button onclick="addToCart()" id="cartwishlist">Find Stock in Store</button> 
    <hr style="top: 146px;">  
    <h1 id="share">SHARE</h1>
    <div class="icon">
    <a id="icons" href="#" class="fa fa-facebook"></a>
    <a id="icons" href="#" class="fa fa-twitter"></a>
    </div>
</div>
<div class="viewed_products">
    <h1 id="viewed">PEOPLE ALSO VIEWED</h1>

</div>

   
  <script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {

    this.classList.toggle("active");

    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
  </script>
</body>
</html>