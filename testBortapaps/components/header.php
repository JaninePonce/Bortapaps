<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main-style.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <a href="../index.php" class="logo">Bortapaps</a>

        <div class="menu">
            <a href="../items/items.php?category=New Arrival" class="new-arrivals">New Arrival</a>
            <a href="../items/items.php?category=Mens" class="men">Mens</a>
            <a href="../items/items.php?category=Womens" class="women">Womens</a>
            <a href="../items/items.php?category=Best Deals" class="best-deals">Best Deals</a>
            <a href="../index.php#items-us" class="about-us">About Us</a>
        </div>

        <div class="icons">
            <div class="search-container">
                <div class="search">
                    <i class="bi bi-search" id="search-icon"></i>
                    <input type="text" name="search" id="search">
                </div>
            </div>
            <div class="user-cart">
                
            </div>
            <i class="bi bi-person-fill" id="user-btn"></i>
        </div>

        

        <div class="cart-bar">
            <span class="material-symbols-outlined" id="close-btn">close</span>


            
        </div>


        <div class="login-bar">
            <!-- <div class="no-account">
                <a href="login.php" onclick="set_mode('login')">Login</a>
                <div><hr width="30%" style="position:absolute; left:20px; top:100px">
                <span style="position:absolute; left:145px; top:88px;color:white;font-weight:bold;">or</span>
                <hr width="30%" style="position:absolute; top:100px; right:20px;"><br></div>
                <a href="login.php" onclick="set_mode('signup')">Singup</a>
            </div> -->

            <div class="no-account">
                <a href="../users/logout.php">Logout</a>
            </div>
        </div>
    </div>

    <script>
        function set_mode(mode){
            localStorage.setItem("mode", JSON.stringify(mode));
        }   
    </script>
</body>
</html>