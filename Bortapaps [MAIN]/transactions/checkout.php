<?php 
    include '../components/connection.php'; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main-style.css">
    <title>Document</title>
</head>
<body>

    
<div class="header">
        <h1>Bortapaps</h1>
        <h1>Checkout</h1>
        <a href="../index.php">Back</a>
    </div>

    <div class="main-container">
        <form action="order.php" method="POST" class="checkout-form">
            <div class="checkout-container">
            
                <div class="address-container">
                    <h2 class="title">Delivery Address</h2>
                    <div class="details">
                        <h4 class="address">Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
                    </div>
                </div>
                <div class="products-container">
                    <h2 class="title">Products ordered</h2>
                    <div class="details">
                        <ol class="order-list">
                            <div class="order-headers">
                                <span>Product Image</span>
                                <span>Name</span>
                                <span>Unit Price</span>
                                <span>Amount</span>
                                <span>Subtotal</span>
                            </div>
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
                                <img src="../Products/<?=$row['path']?>" alt="" width="150px" height="150px" style="object-fit: contain;">
                                <h3 class="product-name"><?=$row['name']?></h3>
                                <span class="product-price">₱<?=$row['price']?></span>
                                <span class="product-qty"><?=$row['qty']?></span>
                                <span class="product-subtotal">P<?=$row['subtotal']?></span>
                            </li>
                            <?php
                            
                                        }
                                    }
                            ?>
                        </ol>
                    </div>
                </div>  
                <div class="payment-container">
                    <h2 class="title">Payment method</h2>
                    <div class="details">

                        
                        <div class="total-div">
                            <h2>Total</h2>
                            <span>₱<?=$total?></span>
                            <input type="hidden" name="total" value="<?=$total?>">
                        </div>

                    <?php
                            foreach($orders as $order){
                    ?>
                            <input type="hidden" name="orders[]" value="<?=$order?>">
                    <?php
                            }
                                    
                        } 
                    ?>
                    </div>
                    <div class="options">
                        <a href="../index.php" class="button">Cancel</a>
                        <input type="submit" class="button" value="Place Order" name="place_order">
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
</html>