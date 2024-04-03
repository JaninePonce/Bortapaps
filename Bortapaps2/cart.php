<?php
    include('../components/connection.php');
    session_start();


    if(!isset($_SESSION['id'])){
        header("Location: ../login.php");
    }

    
    $id = $_SESSION['id'];

    if(isset($_POST['qty_manip'])){
        $productid = $_POST['productId'];
        if($_POST['qty_manip'] == "add-qty"){

            $add = "UPDATE carts SET qty = qty + 1  WHERE carts.productId = $productid AND userId = $id";
            $result = mysqli_query($conn, $add);

        }else if($_POST['qty_manip'] == "sub-qty"){

            $check = "SELECT * FROM carts WHERE productId = $productid AND userId = $id";
            $result = mysqli_query($conn, $check);
            $row = mysqli_fetch_assoc($result);

            if($row['qty'] > 1){
                $sub = "UPDATE carts SET qty = qty - 1  WHERE carts.productId = $productid AND userId = $id";
                $result = mysqli_query($conn, $sub);
            }else{
                $remove = "DELETE FROM carts WHERE productId = $productid AND userId = $id";
                $result = mysqli_query($conn, $remove);
                
            }
        }
    }

?>
<form action="../transactions/checkout.php" method="POST" class="order-form" name="order-form">
<span class="material-symbols-outlined" id="close-btn">close</span>
<ol class="cart-list">

    
    <?php 
        $getcart = "SELECT *, products.price * carts.qty AS total FROM `carts` INNER JOIN `products` ON carts.productid = products.id WHERE userId = $id ORDER BY carts.id DESC ";
        $getCartItems = mysqli_query($conn, $getcart);

        if(mysqli_num_rows($getCartItems) > 0){
        while( $row = mysqli_fetch_assoc($getCartItems)){
        
    ?>
    <li class="cart-item">
        <input type="checkbox" name="orders[]" value="<?=$row['id']?>" style="margin-right: 20px;height: 20px; width: 20px;">
        <img src="/Products/<?=$row['path']?>" width="100px" alt="This is a product image" >
        <div class="details">
            <h2 class="name"><?=$row['name']?></h2>
            Total: $<?=$row['total']?>

            <div class="qty-container">
                <input type="hidden" value="<?=$row['productId']?>" id="product-id">
                <input type="button" value="-" id="sub-qty">
                <span id="qty-num"><?=$row['qty']?></span>
                <input type="button" value="+" id="add-qty">
            </div>
        </div>
    </li>

    <?php
    
        }
    }
    ?>
</ol>

</div>




<style>
    .cart-options {
        height: 50px;
        width: 20vw;
        position: absolute;
        right: 2px;
        bottom: 20px;
    }
</style>

<input type="submit" value="Checkout" class="button cart-options" name="place-order">

</form>

<!-- SCRIPT -->

<script>

    // function placeOrder(){
    //     orders = [];

    //    $(".order-form input[type='checkbox']").each(function(){
    //     item = $(this).attr("name");
    //         if($(this).is(":checked")){
    //             orders.push(item);
    //         }
    //    })

    //    $.ajax({
    //     url: '../transactions/checkout.php',
    //     type: "POST",
    //     data: { orders },
    //     success: function(data){
    //     }
    //    })
    // }

    function manipQty(text, value){
        $.ajax({
                url: '/cart/cart.php',
                type: 'POST',
                data: { 
                    qty_manip : text,
                    productId : value
                    },
                success: function(data){
                    console.log("success", data);
                    updateCart();
                    getCartNum();
                }
            })
    }

    $('.cart-item #sub-qty').each(function(){
        $(this).click(function(){
            let value = $(this).parent().children('#product-id').val();
            manipQty("sub-qty", value);
        })
    })

    $('.cart-item #add-qty').each(function(){
        $(this).click(function(){
            let value = $(this).parent().children('#product-id').val();
            manipQty("add-qty", value);
        })
    })

    $('.cart-bar #close-btn').click(function(){
        $('.cart-bar').removeClass('show');
    })
</script>