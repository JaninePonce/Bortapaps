<?php 
    include('../components/connection.php');
    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: ./users/login.php");
    }
    
    $userid = $_SESSION['id'];

    if(isset($_POST['wishlist_productId'])){
        $id = $_POST['wishlist_productId'];

        $sql = "SELECT * FROM user_wishlist WHERE user_id = $userid AND product_id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT IGNORE INTO user_wishlist(`user_id`, `product_id`) VALUES($userid, $id)";
            mysqli_query($conn, $sql);
        }else{
            
        }

    }

    if(isset($_POST['remove_item_id'])){
        $id = $_POST['remove_item_id'];

        $sql = "DELETE FROM user_wishlist WHERE user_id = $userid AND product_id = $id";
        $result = mysqli_query($conn, $sql);
    }

    // $id = $_POST['wishlist_productId'];
    $getWishlist = "SELECT * FROM user_wishlist INNER JOIN products ON products.id = user_wishlist.product_id WHERE user_id = $userid";
    $WishlistItems = mysqli_query($conn, $getWishlist);

    if(mysqli_num_rows($WishlistItems) > 0){
        while($row = mysqli_fetch_assoc($WishlistItems)){
?>
    <li class="item">
        <img src="products/<?=$row['category'] ?>/<?= $row['path'] ?> " alt="" width="100px" style="object-fit: contain;">
        <div class="details">
          <div class="identifier">
            <h2 class="title"><?= $row['name'] ?></h2>
            <input type="hidden" id="product-id" value="<?= $row['product_id']?>">
            <button onclick="removeItemFromWishlist(this.previousElementSibling)" class="material-symbols-outlined">delete</button>
        </div>
          <h5>Category: <?= $row['category'] ?></h5>
          <div class="desc">
            <br><br>
            <h5>Price: $<?= $row["price"] ?></h5>
            <!-- <a href="">Check -></a> -->
          </div>
        </div>
    </li>
    <?php 
        }
    }
    ?>
</form>
