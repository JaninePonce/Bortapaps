<?php 
    include 'connection.php';
    session_start();

    if(isset($_POST['compare_productId'])){
        $product_id = $_POST['compare_productId'];
        if(!in_array($product_id, $_SESSION['compare_list'])){
            array_push($_SESSION['compare_list'], $product_id);   
        }
    }

    if(isset($_POST['remove_id'])){
        $product_id = $_POST['remove_id'];
        $index = array_search($product_id, $_SESSION['compare_list']);
        unset($_SESSION['compare_list'][$index]);
    }

    if(isset($_SESSION['compare_list'])){ 
    foreach($_SESSION['compare_list'] as $item){
        $sql = "SELECT * FROM products WHERE id = '$item'";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($result)){
?>

<li class="item">
    <input type="hidden" name="product-id" value="<?=$row['id']?>">
    <span class="material-symbols-outlined close">close</span>
    <img src="../products/<?=$row['category']?>/<?=$row['path']?>" alt="">
</li>

<?php
            }
        }
    }

?>

<script>
    
$(".compare-section .list .close").each(function(){
    $(this).click(function(){
        $.ajax({
            url: "../components/compare.php",
            type: "POST",
            data: {
                remove_id : $(this).prev().val()
            },
            success: function(data){
                $(".compare-section .list").html(data);
                
                if($(".compare-section .list").children(".item").length == 0){
                    $(".compare-section").addClass("hidden");
                }
            }
        })
    })
})

</script>