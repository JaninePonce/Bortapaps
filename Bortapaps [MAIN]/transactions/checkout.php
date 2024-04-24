<?php
  include '../components/connection.php';
  session_start();
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
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../css/component-style.css">
  <link rel="stylesheet" href="../css/checkout.css">
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
<body>
  <!-- CONTENTS -->
<header class="header" data-header style="display:flex; flex-direction: row; align-items: center; justify-content: center;">
    <div class="container" style="margin-left: 5px;">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="../resources/headertest.svg" width="200" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="../resources/BORTAPAPS2.png" width="190" height="50" alt="Footcap logo">
        </a>

        <div>
            <h2>CHECKOUT</h2>
        </div>
      </nav>
    </div>
  </header>

  <!-------------------------- MAIN CONTENT ------------------------------->
    <div class="main-container">
    <form action="order.php" method="POST" class="checkout-form">
        <h2>Order Summary</h2><br>
        <div class="main-layout">
            <ul class="item-list">
            <?php
                if(isset($_POST['orders'])){
                    $orders = $_POST['orders'];
                    $userId = $_SESSION['id'];
                    $user = $_SESSION['user'];
                    $total = 0;

                    $sql = "SELECT *, (carts.id) AS cartId ,(price * qty) AS subtotal FROM carts INNER JOIN products ON productId = products.id WHERE userId = $userId;";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        if(in_array($row['productId'], $orders)){
                            $total += $row['subtotal'];
                
            ?>
                <li class="item">
                    <img src="../Products/<?=$row['path']?>" alt="" width="100px;" style="object-fit: contain;">
                    <div class="details">
                    <h2 class="name"><?=$row['name']?></h2>
                    <h5>Qty: <?=$row['qty']?></h5>
                        <div class="summary">
                            <h5>Unit Price: $<?=$row['price']?></h5>
                            <h5>Subtotal: $<?=$row['subtotal']?>
                        </div>
                    </div>
                </li>
                <?php
                            }
                        }
                ?>
            </ul>
            <div class="transaction-container">
                <h3>Transaction details</h3>
                <div class="transaction-summary">
                    <table>
                        <tr>
                            <td style="padding-right: 20px"><h4>Total</h4></td>
                            <td style="width: 85%; padding-right: 20px;"><hr></td>
                            <td>$<?=$total?></td>
                            <input type="hidden" name="total" value="<?=$total?>">
                        </tr>
                    </table>

                    <?php
                            foreach($orders as $order){
                    ?>
                            <input type="hidden" name="orders[]" value="<?=$order?>">
                    <?php
                            }
                                    
                        } 
                    ?>

                </div>
                <hr>
                <h3>Select payment option</h3>
                <div class="payment-container">
                    <div>
                      <label class="payment-type">
                          <input type="radio" name="payment" id="counterpay" value="Pending payment" required>
                          <span class="material-symbols-outlined">payments</span>
                          <h4>Cash</h4>
                      </label>
                    </div>
                    <div>
                    <label class="payment-type">
                        <input type="radio" name="payment" id="onlinepay" value="Paid online">
                        <span class="material-symbols-outlined">credit_card</span>
                        <h4>Online</h4>
                    </label>
                    </div>
                </div>
                <div class="buttons-container">
                    <a href="../index.php" class="button">Cancel</a>
                    <input type="submit" class="button checkout" value="Place Order" name="place_order">
                </div>
            </div>
        </div>
    </form>
    </div>

    <script>
        
    </script>

</body>
</html>