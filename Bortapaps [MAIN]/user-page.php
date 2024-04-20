<?php 
    include 'components/connection.php';
?>

<body>
    
    <?php 
        include 'components/header.php'; 

        if(!isset($_SESSION['id'])){
            header("Location: ../users/login.php");
        }else{
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
    ?>

    <div class="profile-container">
        <div class="profile"> 
            <img class="profile-picture" src="/resources/duck.jpg"></img>
            <h2 class="name">@<?=$_SESSION['user']?></h2>
        </div>
        <div class="details-container">
            <div class="details">

            </div>
            <div class="qrcode-section">
                <h5>Use this to login!</h5>
                <div class="qrcode-container">
                    <div id="qrcode"></div>
                </div>
                <a href="users/logout.php" class="button">Logout</a>
            </div>
        </div>
    </div>

        
    <script src="qr-code/qrcode.js"></script>
    <script src="qr-code/qrcode.min.js"></script>
    <script type="text/javascript">

    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "http://jindo.dev.naver.com/collie",
        width: 256,
        height: 256,
        colorDark : "#000000",
        colorLight : "#ffffff00",
        correctLevel : QRCode.CorrectLevel.H
    });

    qrcode.makeCode("../users/account.php?user=<?=$row['username']?>&pass=<?=$row['password']?>");

    </script>

    
    <?php 
        }}
        include 'components/footer.php';
    ?>
</body>
</html>