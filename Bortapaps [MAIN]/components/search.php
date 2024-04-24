
<?php 
    include '../components/connection.php';

    if(isset($_POST['search_word'])){
        $word = $_POST['search_word'];
        $sql = "SELECT * FROM products WHERE name LIKE '%$word%'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            ?>
<div class="item-list">
            <?php

            while($row = mysqli_fetch_assoc($result)){
?>

    <div class="item">
        <img src="../products/<?=$row['category']?>/<?=$row['path']?>" alt="" style="height: 90px; width: 80px;">
    </div>   

<?php 
            }
            ?>      
</div>
            <?php
        }else{
            ?>
            <h3>There is no result for "<?= $word ?>".</h3>
            <?php
        }
    }
?>