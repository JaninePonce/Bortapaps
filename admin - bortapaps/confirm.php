<?php 
    
    include 'conn.php';

    if(isset($_POST['transaction_id'])){
        $transaction_id = $_POST['transaction_id'];
        $amount = 0;

        if(isset($_POST['amount'])){
            $amount = $_POST['amount'];
        }

        $change = 0;
        if($transaction_id === "" ){ return; } 


        $sql = "SELECT * FROM transactions WHERE id = $transaction_id";
        $transaction_result = mysqli_query($conn, $sql);

        $total = 0;
        $status = "";
        $tr_status = "";

        if(mysqli_num_rows($transaction_result) > 0){

            $sql = "SELECT * FROM orders INNER JOIN products ON orders.productId = products.id WHERE transactionId = $transaction_id";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($transaction_result);
            $total = $row['total'];
            $tr_status = $row['status'];

            $order_sql = "SELECT * FROM order_tab WHERE transaction_id = $transaction_id";
            $order_query = mysqli_query($conn, $order_sql);

            $order_tab = mysqli_fetch_assoc($order_query);
            $status = $order_tab['status'];

            if($status == "Pending payment"){
                if($amount < $total){ 
                    echo "Failed"; 
                    return;
                }else{
                    $change = $total - $amount;
    
                    $update_sql = "UPDATE transactions SET amount = $amount, status = 'Closed', employeeId = 1 WHERE id = $transaction_id";
                    mysqli_query($conn, $update_sql);
                    $update_sql = "UPDATE order_tab SET status = 'Paid cash' WHERE transaction_id = $transaction_id";
                    mysqli_query($conn, $update_sql);
                }
            }else if($status == "Paid online"){
                $update_sql = "UPDATE transactions SET status = 'Closed', employeeId = 1 WHERE id = $transaction_id";
                mysqli_query($conn, $update_sql);
            }
        }
    }
?>
