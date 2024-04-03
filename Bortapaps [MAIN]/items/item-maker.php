<div class="items-container">
            <?php

                if(isset($_GET['category'])){

                    $category = $_GET['category'];

                    if($category == "New Arrival"){
                        $sql = "SELECT * FROM `products` ORDER BY `products`.`id` DESC LIMIT 10";
                        $result = mysqli_query($conn, $sql);

                        
                        while($row = mysqli_fetch_assoc($result)){
                                     
                        ?>
                        <form method="post" id="item-form" name="item-form">
                            <div class="item-box">
                                <input type="hidden" id="pid" name="pid" value="<?=$row['id']?>"> 
                                <img src="../Products/<?= $row['path'] ?>" width="200px" height="200px" style="object-fit:contain;" alt="This is an item image">

                                <div class="item-details">
                                    <span><?= $row['name']?></span>
                                    <span>₱<?=$row['price']?></span>
                                </div>

                                <div class="item-options">
                                    <input type="button" value="Quick View" id="quick-view">
                                    <input type="submit" value="Add to Cart" id="to-cart" name="to-cart">
                                </div>
                            </div>
                        </form>
        <?php      
                }
            }
    //            -------------------- CATEGORY -----------------------
            else{
                        $sql = "SELECT * FROM products WHERE category = '$category'";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                
            ?>
                        <form method="post" id="item-form" name="item-form">
                            <div class="item-box">
                                <input type="hidden" id="pid" name="pid" value="<?=$row['id']?>"> 
                                <img src="../Products/<?= $row['path'] ?>" width="200px" height="200px" style="object-fit:contain;" alt="This is an item image">

                                <div class="item-details">
                                    <span><?= $row['name']?></span>
                                    <span>₱<?=$row['price']?></span>
                                </div>

                                <div class="item-options">
                                    <input type="button" value="Quick View" id="quick-view">
                                    <input type="submit" value="Add to Cart" id="to-cart" name="to-cart">
                                </div>
                            </div>
                        </form>
            <?php             
                        }
                    }
                }
            }
            ?>

        <script>

            $('.items-container #item-form').each(function(){
                $(this).submit(function(event){
                    event.preventDefault();

                    var pid = $(this).children(".item-box").children("#pid").val();
                    
                    $.ajax({
                            type: 'POST',
                            url: '../cart/add-to-cart.php',
                            data: { pid },
                            success: function(data){
                                console.log("success", data);

                                getCartNum();
                                updateCart();
                            }
                        })
                    })
            })
        </script>
</div>