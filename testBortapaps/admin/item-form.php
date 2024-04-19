<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>
<body>
    
    <div class="header">
        <?php 
        if(isset($message)){
            foreach($message as $message){
                echo '
                <div class="message">
                    '.$message.'
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>
                ';
            }
        }
        ?>
    </div>

    <div class="main-container">
        <div class="upload-container">

            

            <form name="item-insert-form" method="post" enctype="multipart/form-data" id="item-form">
                <h1>Insert products here!</h1><br><br>
                Name: <input type="text" name="product-name" id="product-name" required><br><br>
                Price: <input type="number" name="product-price" min="0" value="0" step="0.01" required><br><br>
                Category: <select name="product-category" id="product-category">
                    <option value="New Arrival" selected>New Arrivals</option>
                    <option value="Mens">Mens</option>
                    <option value="Womens">Womens</option>
                </select><br><br>
                File: <input type="file" name="product-filename" id="product-filename" accept="image/png, image/jpeg, image/jpg" required><br><br>
                <input type="submit" value="Upload" name="item-submitted">
            </form>
        </div>
    </div>
    
    
    <script>
        $('#item-form').submit(function(){
            $.ajax({
                url: 'item-uploader.php',
                type: 'POST',
                success: function(response){
                    console.log("success");
                }
            })
        })
    </script>
</body>

</html>