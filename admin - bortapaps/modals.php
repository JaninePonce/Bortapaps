<?php 
    include 'conn.php';

    
    if(isset($_POST['product_id'])){
        $id = $_POST['product_id'];

        $sql = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        $product = mysqli_fetch_assoc($result);
?>

<div class="background"></div>
<div class="popup">
    <img src="products/<?=$product['category']?>\<?=$product['path']?>" alt="">
    <div class="details">
        <h2 class="title"><?= $product['name'] ?></h2>
        <span class="product-id">No. <?= $product['id'] ?></span>

        <p class="description"><?= $product['description'] ?></p>
        
    </div>
</div>
<script>
    $(".background").click(function(){
        $(".modals").addClass("hidden")
        setTimeout(function(){
            $(".modals").empty();
        },280)
    })
</script>
<?php 
    }
?>