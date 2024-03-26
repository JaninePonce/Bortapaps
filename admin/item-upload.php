


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<style>
    body {
        background-color: #333;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .main-container {
        height: 50vh;
        width: 50vw;
        background-color: aliceblue;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .main-container .content {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .content  #upload-item{
        margin-top: 40px;
        margin-left: 125px;
        height: 40px;
        width: 120px;
        border-radius: 100px;
        background-color: lightblue;
    }

    .content #upload-item:hover{
        background-color: #888;
        color: white;
        font-weight: bold;
    }

    .content .frame {
        position: absolute;
        right: 27vw;
        height: 260px;
        width: 255px;
        outline: 2px solid red;
    }

    .main-container #product-image {
        position: relative;
        right: 20px;
        object-fit: cover;
    }

    .message {
        position: absolute;
        top: 0px;
        height: 70px;
        width: 100%;
        display: flex;   
        flex-direction: column;
    }

    .message div {
        padding-left: 50px;
        font-weight: bold;
        color: white;
        display: flex;
        align-items: center;
        height: 70px;
        border-radius: 20px;
        background-color: blue;
    }

    .message .success {
        background-color: lightgreen;
        border: 3px solid green;
    }

    .message .error {
        background-color: lightcoral;
        border: 3px solid red;
    }
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
                        <td><label for="product-name">Product Name:</label></td>
                        <td><input type="text" name="product-name" id="product-name" required></td>
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