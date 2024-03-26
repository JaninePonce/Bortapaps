<?php 
include 'conn.php'; 

if(isset($_POST['upload-button'])){

    echo'choy';
    $name = mysqli_real_escape_string($conn, $_POST['product-name']);
    $price = $_POST['product-price'];
    $category = mysqli_real_escape_string($conn, $_POST['product-category']);
    $file = $_FILES['product-file'];
    
    $current = $file['tmp_name'];
    $destination = "items/".basename($file['name']);

    move_uploaded_file($current, $destination);

    $check = "SELECT * FROM products WHERE `name` = '$name'";
    $checkResult = mysqli_query($conn, $check);

    if(mysqli_num_rows($checkResult) == 0){
        $upload = "INSERT INTO `products`(`name`, `price`, `category`, `path`) VALUES (?, ?, ?, ?)"; // Using prepared statement
        $stmt = mysqli_prepare($conn, $upload);
        mysqli_stmt_bind_param($stmt, "sdss", $name, $price, $category, $file['name']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("Location: item-upload.php?success=Item uploaded successfully!");
    } else {
        header("Location: item-upload.php?error=Product with name '$name' already exists.");
    }
}
?>
