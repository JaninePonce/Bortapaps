<?php
    include('../components/connection.php');
    session_start();
    
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


<form action="./transactions/checkout.php" method="POST" class="order-form" name="order-form">
    <span class="material-symbols-outlined close-btn">close</span>

<?php 
    $getcart = "SELECT *, products.price * carts.qty AS total FROM `carts` INNER JOIN `products` ON carts.productid = products.id WHERE userId = $id ORDER BY carts.id DESC ";
    $getCartItems = mysqli_query($conn, $getcart);

    if(mysqli_num_rows($getCartItems) > 0){
?>

    <div class="details">
        <div class="select-all" style="display: flex; flex-direction: row; align-items:center;height: 30px; width: 100px; margin-bottom: 5px">
            <input type="checkbox" name="checkall" id="check_all" style="height: 20px; width: 20px;">
            <label for="check_all" style="padding: 5px;">Select All</label>
        </div>
        <ol class="cart-list">
            <?php
                    while( $row = mysqli_fetch_assoc($getCartItems)){
                
            ?>
            <li class="cart-item">
                <input type="checkbox" class="item-box" name="orders[]" value="<?=$row['id']?>" style="margin-right: 20px;height: 20px; width: 20px;">
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
            ?>
        </ol>
    </div>

    <input type="submit" value="Checkout" class="button cart-options" name="place-order">
    <?php 
        }
    ?>
</form>

<!-- UPDATES CART -->

<script>
    function manipQty(text, value){
        console.log("through");
        $.ajax({
                url: 'cart/cart.php',
                type: "POST",
                data: { 
                    qty_manip : text,
                    productId : value
                    },
                success: function(data){
                    console.log(data);
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

   

    $("#check_all").change(function(){
        if($("#check_all").is(":checked")){
            $(".cart-list .item-box").each(function(){
                $(this).prop("checked", true);
            })
        }else{
            $(".cart-list .item-box").each(function(){
                $(this).prop("checked", false);
            })
        }
    })
</script>