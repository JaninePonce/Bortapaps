


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<style>
</style>

<body>

    <div class="message">
        <?php 
            if(isset($_GET['success'])){
        ?>
            <div class="success"><?=$_GET['success']?></div>
        <?php
            }

            if(isset($_GET['error'])){
        ?>
            <div class="error"><?=$_GET['error']?></div>
        <?php } ?>
    </div>

    <div class="main-container">
        <h1>Upload here</h1>
        <div class="content">
            <form action="item.php" method="POST" name="item-form" class="item-form" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="product-name">Name:</label></td>
                        <td><input type="text" name="product-name" id="product-name" required></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><textarea name="product-description"  cols="20" rows="3" style="resize: none;"></textarea></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><input type="number" name="product-price" id="" step=".01" required></td>
                    </tr>
                    <tr>
                        <td>Category:</td>
                        <td>
                            <select name="product-category" id="product-category" required>
                                <option value="Mens">Mens</option>
                                <option value="Womens">Womens</option>
                                <option value="Mens/Accessories">Men's Accessories</option>
                                <option value="Womens/Accessories">Women's Accessories</option>
                                <option value="Accessories">Unisex Accessories</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>File</td>
                        <td><input type="file" name="product-file" id="product-file" onchange="previewFile()" required></td>
                    </tr>
                </table>
                <input type="submit" value="Upload" id="upload-item" name="upload-button">
            </form>
            <img src="" width="250px" height="250px" alt="choy" id="product-image">   
        </div> 
    </div>
    

    <script>
        function previewFile() {
            var preview = document.querySelector('#product-image');
            var file    = document.querySelector('#product-file').files[0];
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>
</body>
</html>