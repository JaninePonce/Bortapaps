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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Ojuju:wght@200..800&family=Truculenta:opsz,wght@12..72,100..900&family=VT323&display=swap" rel="stylesheet">
</head>

<style>

    *{
        box-sizing: border-box;
        margin: 0px;
        font-family: "VT323", monospace;
    }

    body{
        background-color: #888;
        display: flex;
        justify-content: center;
    }

    
</style>

<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.6/dist/JsBarcode.all.min.js"></script>
<body>
    <div class="receipt-container" style="padding-top: 50px;">
        <h3>Your order number is</h3>
        <!-- <img src="../resources/headertest.svg" width="320px" style="margin-bottom: 20px;">
        <h3>Go to www.bortapaps.com within 7 days and tell us about your visit</h3>
        <h3> Expires 30 days after receipt date</h3>
        <h3> Valid at participating Bortapaps Franchise</h3> -->

        <?php 
            if(isset($_SESSION['tab_id'])){
                ?>
                <h1 class="title"><?= $_SESSION['tab_id'] ?></h1>
                <?php
            }
        ?>

        <hr style="margin-top: 20px">
        <div class="details">
            <table>
                <tr>
                    <th style="width: 30vw; border: 1px solid black">Name</th>
                    <th style="width: 5vw; border: 1px solid black">Qty</th>
                    <th style="width: 5vw; border: 1px solid black">Unit Price</th>
                    <th style="width: 7vw; border: 1px solid black">Subtotal</th>
                </tr>
                <?php 

                if(isset($_GET['transactionId'])){
                    $transactionId = $_GET['transactionId'];
                    $sql = "SELECT * FROM orders INNER JOIN products ON productId = products.id WHERE transactionId = $transactionId";
                    $result = mysqli_query($conn, $sql);

                    $sql = "SELECT * FROM order_tab WHERE id = ".$_SESSION['tab_id'];
                    $order = mysqli_query($conn, $sql);
                    

                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td style="padding-left: 10px;"><?= $row['name'] ?></td>
                    <td style="text-align: center;"><?= $row['qty'] ?></td>
                    <td style="text-align: center;"><?= "$".$row['price'] ?></td>
                    <td style="text-align: center;"><?= "$".$row['total'] ?></td>
                </tr>
                <?php 
                    }
                ?>
            </table>
            <hr>

            <?php 
                $totalsql = "SELECT total, order_tab.status FROM transactions INNER JOIN order_tab ON transactions.id = order_tab.transaction_id WHERE transactions.id = $transactionId";
                $result = mysqli_query($conn, $totalsql);

                while($row = mysqli_fetch_assoc($result)){
            ?>

            <table>
                <tr>
                    <td><h1>Total</h1></td>
                    <td style="width: 30vw;"><hr></td>
                    <td style="width: 5vw; padding: 5px;">$<?= $row['total'] ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><hr></td>
                    <td style="width: 5vw; padding: 5px;"><?= $row['status'] ?></td>
                </tr>
            </table>

            <?php 
                }
            ?>
            <hr style="margin-bottom: 40px;">

            <h1>Thank You!</h1>
            <h5>- Please show this to the counter -</h5>
            <svg class="barcode"></svg>
            <script>
                JsBarcode(".barcode", <?=$transactionId?>, {
                    displayValue: false
                });
            </script>
        </div>
    </div>
    <?php 
        }
    ?>

<script type="text/javascript">

    $(document).ready(function () {
        window.print();
    });

</script>
</body>

        <a href="../index.php" class="receipt-homebtn">Home</a>
</html>