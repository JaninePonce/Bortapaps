<?php 
    include '../components/connection.php'; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/checkout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
    

<body>
    <div class="header">

    </div>
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
                            <td style="width: 85%;"><hr></td>
                            <td style="padding-left: 20px">$<span class="money"><?=$total?></span></td>
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
                        <input type="radio" name="payment" id="counterpay" required>
                        <label for="counterpay">Pay on Counter</label>
                    </div>
                    <div>
                        <input type="radio" name="payment" id="onlinepay">
                        <label for="onlinepay">Pay Online</label>
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