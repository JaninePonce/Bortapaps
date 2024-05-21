<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="container">

    <div class="main container">
        <h1> Upload here!</h1>
        <form action="" method="post" id="upload-form" class="layout">
            <table>
                <tr>
                    <td><label for="pname">Product Name: </label></td>
                    <td><input type="text" name="product_name" id="pname"></td>
                </tr>
                <tr>
                    <td><label for="pprice">Price: </label></td>
                    <td><input type="number" name="product_price" id="pprice"></td>
                </tr>
                <tr>
                    <td>Stock:</td>
                    <td><input type="number" name="product_stock" id="pstock"></td>
                </tr>
                <tr>
                    <td>Supplier</td>
                    <td>
                        <select name="" id="" class="options" >
                            <option value="">Supplier 1</option>
                            <option value="">Supplier 2</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                    <td id="other-field" class="hidden"><input type="text" name="" id="" placeholder="Please specify"></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="" id="category-options" class="options">
                            <option value="">Category 1</option>
                            <option value="">Category 2</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                    <td id="other-field" class="hidden"><input type="text" name="" id="category-specify" placeholder="Please specify"></td>
                </tr>
                <tr id="sub-category">
                    <td>Sub-Category</td>
                    <td>
                        <select name="" id="sub-options" class="options">
                            <option value="">SubCategory 1</option>
                            <option value="">SubCategory 2</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                    <td id="other-field" class="hidden"><input type="text" name="" id="sub-specify" placeholder="Please specify"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <select name="" id="">
                            <option value="">Womens</option>
                            <option value="">Mens</option>
                            <option value="">Unisex</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>