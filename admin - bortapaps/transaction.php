<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    
    include 'conn.php';

    if(isset($_POST['barcode_result'])){
        $barcode_result = $_POST['barcode_result'];

        if($barcode_result === "" ){ return; } 
    
        $sql = "SELECT * FROM transactions WHERE id = $barcode_result";
        $transaction_result = mysqli_query($conn, $sql);

        $total = 0;
        $status = "";
        $tr_status = "";

        if(mysqli_num_rows($transaction_result) > 0){

            $sql = "SELECT * FROM orders INNER JOIN products ON orders.productId = products.id WHERE transactionId = $barcode_result";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($transaction_result);
            $total = $row['total'];
            $tr_status = $row['status'];

            $order_sql = "SELECT * FROM order_tab WHERE transaction_id = $barcode_result";
            $order_query = mysqli_query($conn, $order_sql);

            $order_tab = mysqli_fetch_assoc($order_query);
            $status =$order_tab['status'];
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
                    <h5>x<?= $row['qty'] ?></h5>
                </div>
                <div class="product-options flex row">
                <button class="view-option flex">
                    <input type="hidden" name="product-id" value="<?= $row['productId'] ?>">
                    <span class="material-symbols-outlined eye">visibility</span>
                </button>
                </div>
            </li>
            <?php 
                }
            ?>
        </ul>
    </div>
    <div class="transaction-details">
            <h1 style="font-size: 40px;">Total: $<?=number_format($total, 2)?></h1><?php 
            if($tr_status == "Pending"){
                ?>
                <div class="buttons">
                    <form action="#" id="transaction-form">
                        <input type="hidden" name="transaction_id" id="tr_id" value="<?=$barcode_result?>">
                        <input type="submit" class="button green" value="Confirm">
                        <?php 
                            if($status == "Pending payment"){
                                ?>
                                <input type="number" name="amount" id="amount" placeholder="Enter amount" required>
                                <?php
                            }
                        ?>
                    </form>
                </div>
                <?php
            }
                ?>
    </div>
</div>

<?php 
        }else{
            echo "<h5>Transaction have not been found.</h5>";
        }
    }
?>

<script src="script.js"></script>
<script>
    function getTransaction(id){
        $.ajax({
            url: 'transaction.php',
            type: "POST",
            data: { barcode_result : id},
            success: function(data){
                $(".container").html(data);
            }
        })
    }

    $('#transaction-form').submit(function(e){
        e.preventDefault();
          $.ajax({
            url: "confirm.php",
            type: "POST",
            data: {
                transaction_id : $("#tr_id").val(),
                amount : $('#amount').val()
            },
            success: function(data){
                if(data == "Failed"){
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Insufficient amount!",
                        showConfirmButton: false,
                        timer: 1500
                        });
                }else{
                    getTransaction($("#tr_id").val());
                    Swal.fire({
                        icon: "success",
                        title: "Transaction completed!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
          })
          
    })
</script>