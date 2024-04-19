<?php
    include('../connection.php');


    if(isset($_POST['item-submitted'])){
        
        if(isset($_FILES['product-filename']) && $_FILES['product-filename']['error'] === UPLOAD_ERR_OK){
        $name =  $_POST['product-name'];
        $price = $_POST['product-price'];
        $filename = $_FILES['product-filename'];
        $category = $_POST['product-category'];


        $image = $_FILES['product-filename']['name'];
        $image = filter_var($image, FILTER_UNSAFE_RAW);
        $image_size = $_FILES['product-filename']['size'];
        $image_tmp_name = $_FILES['product-filename']['tmp_name'];
        $image_folder = '../Products/'.$image;

        $sql = "SELECT * FROM `products` WHERE `name` = '$name'";
        $result = mysqli_query($conn, $sql);
     
        if(mysqli_num_rows($result) > 0){
           $message[] = '<span class="error">product name already exists!</span>';
        }else{
           if($image_size > 2000000){
              $message[] = 'image size is too large';
           }else{
              move_uploaded_file($image_tmp_name, $image_folder);
     
            
              $sql = "INSERT INTO `products`(`name`, `price`, `category`, `path`) VALUES ('$name', $price, '$category', '$image')";
              $result = mysqli_query($conn, $sql);
     
              $message[] = '<span class="success">new product added!</span>';
           }
     
        }
    }
    }
?>