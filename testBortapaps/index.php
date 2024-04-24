
<?php 

session_start();

include('components/connection.php');
include('components/header.php');

if(isset($_SESSION['user']) && isset($_SESSION['id'])){

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<body>
    
    <div class="main-container">

    </div>


    <section class="about-section" id="about-us">
        </section>


    <script src="/js/script.js"></script>
</body>
</html>


<?php
}else{
    header("Location: users/login.php");
    ?>
    <script>localStorage.setItem("mode", JSON.stringify("login"))</script>
    <?php
}

?>