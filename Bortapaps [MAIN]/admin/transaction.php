
<?php 
    
    include 'conn.php';

    if(isset($_POST['barcode_result'])){
        $barcode_result = $_POST['barcode_result'];

        if($barcode_result === "" ){ return; } 
    
        $sql = "SELECT * FROM transactions WHERE id = $barcode_result";
        $transaction_result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($transaction_result) > 0){

            $sql = "SELECT * FROM orders INNER JOIN products ON orders.productId = products.id WHERE transactionId = $barcode_result";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($transaction_result);

            $order_sql = "SELECT * FROM order_tab WHERE transaction_id = $barcode_result";
            $order_query = mysqli_query($conn, $order_sql);

            $order_tab = mysqli_fetch_assoc($order_query);
?>

<div class="transaction flex column">
    <div class="title flex row">
        <h2>Transaction no. <?= $barcode_result ?></h2>
        <div class="flex row" style="gap: 10px">
                    
            <?php 
                if($row['status'] === "Pending"){
            ?>
                    <h5 class="status green"><?= $row['status'] ?></h5>
            <?php 
                }else{
            ?>
                    <h5 class="status grey"><?= $row['status'] ?></h5>
            <?php
                }
            ?>

<?php 
                if($order_tab['status'] === "Paid online" || $order_tab['status'] === "Paid cash"){
            ?>
                    <h5 class="status green"><?= $order_tab['status'] ?></h5>
            <?php 
                }else{
            ?>
                    <h5 class="status grey"><?= $order_tab['status'] ?></h5>
            <?php
                }
            ?>

            </div>
    </div>
    <div class="details flex column">
        <ul class="item-list">
            <?php 
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <li class="item">
                <div class="flex" style="justify-content: start; gap: 10px; margin-left: 50px;">
                    <h5><?= $row['name'] ?></h5>
                    <span class="product-id" style="font-size: 10px;">Item no. <?= $row['productId'] ?></span>
                </div>
                <div class="product-options flex row">
                <button class="view-option flex">
                    <input type="hidden" name="product-id" value="<?= $row['productId'] ?>">
                    <span class="material-symbols-outlined">visibility</span>
                </button>
                </div>
            </li>
            <?php 
                }
            ?>
        </ul>
    </div>

    <!-- <div class="buttons">
        <input type="button" class="button green" value="Confirm">
    </div> -->
</div>

<?php 
        }else{
            echo "<h5>Transaction have not been found.</h5>";
        }
    }
?>