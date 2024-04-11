<?php
    session_start();

    include ('../components/connection.php');

    if(!isset($_SESSION['id'])){
        header("Location: ./users/login.php");
    }
    
    $id = $_SESSION['id'];

    if(isset($_POST['pid'])){
        $productid = $_POST['pid'];

        $check = "SELECT * FROM carts WHERE productId = $productid AND userId = $id";
        $checkresult = mysqli_query($conn, $check);
        $result = mysqli_fetch_assoc($checkresult);
        $row = mysqli_num_rows($checkresult);

        $_SESSION['conn'] = $conn;
        

        if($row > 0){
            $additem = "UPDATE carts SET qty = qty + 1  WHERE carts.productId = $productid";
            $cartresult = mysqli_query($conn, $additem);
        }else{
            $additem = "INSERT INTO carts(`userId`, `productId`, `qty`) VALUES ( $id, $productid, 1)";
            $cartresult = mysqli_query($_SESSION['conn'], $additem);
        }

        unset($_POST['pid']);
    }

?>
<button class="nav-action-btn" id="cart-button">
<ion-icon name="bag-outline" aria-hidden="true"></ion-icon>
<?php
        $check = "SELECT * FROM carts WHERE userId = $id";
        $checkresult = mysqli_query($conn, $check);

        $row = mysqli_num_rows($checkresult);

        if($row > 0){
        ?>
    <div class="cart-num" id="cart-num"><?=$row?></div>
<?php } ?>

</button>

<script>
    cart_container = document.querySelector(".cart-bar");

    document.querySelector("#cart-button").addEventListener("click", function(){
        cart_container.classList.toggle("show");
    })
</script>

