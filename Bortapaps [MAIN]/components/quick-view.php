<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<?php 
    include '../components/connection.php';
    session_start();

    if(isset($_POST['pid'])){
        $id = $_POST['pid'];
        $uid = $_SESSION['id'];
        $qty = $_POST['item_qty'];

    
        $checksql = mysqli_query($conn, "SELECT * FROM carts WHERE userId = $uid AND productId = $id");
        var_dump($checksql);
        if(mysqli_num_rows($checksql) > 0){ 
            mysqli_query($conn, "UPDATE carts SET qty = qty + $qty WHERE userId = $uid AND productId = $id");
        }else{
            mysqli_query($conn, "INSERT INTO carts (userId, productId, qty) VALUES ($uid, $id, $qty)");
        }

    }
    
    if(isset($_POST['view_productId'])){
        $id = $_POST['view_productId'];

        $sql = "SELECT * FROM products WHERE id = $id";
        $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>
<div class="popup">
<div class="close-btn"></div>
    <div class="popup-container">
        <div class="item-preview">
            <img src="products/<?= $row['category']?>/<?=$row['path'] ?>" alt="">
            <div class="details">
                <h1 style="font-size: 40px;"><?=$row['name']?></h1>
                <div class="id-details"><span>NO: <?=$row['id']?></span> <span>Category: <?=$row['category']?></span></div>
                <div class="desc">
                    <h3>Php <?=$row['price']?></h3>
                    <br><span><?=$row['description']?></span>
                </div>
                <div class="popup-options">
                    <div class="qty-container">
                        <h4>Qty: </h4>
                        <button onclick="if(this.nextElementSibling.value > 1)this.nextElementSibling.stepDown()">-</button>
                        <input type="number" style="width: 40px; text-align:center" name="item-qty" id="item-qty" value="1">
                        <button onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>

                    <div class="popup-buttons">
                        <input type="hidden" name="add_id" value="<?=$row['id']?>">
                        <input type="submit" class="cart-btn" value="Add to Cart">
                        <!-- <span class="material-symbols-outlined heart-btn">favorite</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>

<script>

    $(".popup .close-btn").click(function qvClose(){
        $(".popup-container").addClass("hide");
        setTimeout(function(){
            $(".popup-section").empty();
        }, 300)
    })


    $(".popup-buttons .cart-btn").click(function(){
        let item_qty = $('#item-qty').val()
        $.ajax({
            url: "components/quick-view.php",
            type: "POST",
            data: {
                pid : $(this).prev().val(),
                item_qty
            },
            success: function(data){
                // console.log(data)
                getCartNum();
                updateCart();
                $(".popup-container").addClass("hide");
                setTimeout(function(){
                    $(".popup-section").empty();
                }, 300)

                Swal.fire({
                position: "center",
                icon: "success",
                title: "Added to cart!",
                showConfirmButton: false,
                timer: 1500
              });
            }
        })
    })
</script>