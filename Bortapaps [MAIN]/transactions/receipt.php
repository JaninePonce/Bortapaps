<?php
    include '../components/connection.php';
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
    <div class="receipt-container">
        <h1 class="title">Official Receipt</h1>
        <hr>

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
                $totalsql = "SELECT * FROM transactions WHERE id = $transactionId";
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
                    <td>Cash</td>
                    <td><hr></td>
                    <td style="width: 5vw; padding: 5px;">$<?= rand(1000,2000) ?></td>
                </tr>
                <tr>
                    <td>Change</td>
                    <td><hr></td>
                    <td style="width: 5vw; padding: 5px;"$>200.12</td>
                </tr>
            </table>

            <?php 
                }
            ?>
            <hr style="margin-bottom: 40px;">

            <h1>Thank You!</h1>
            <svg id="barcode"></svg>
            <script>
                JsBarcode("#barcode", <?= $transactionId ?>, {
                    displayValue: false
                });
            </script>
        </div>
    </div>
    <?php 
                }
    ?>
</body>
</html>