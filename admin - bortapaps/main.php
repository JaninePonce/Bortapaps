<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body style="background-color: #333;">
    <div class="header">
        <h1 class="title">CASHIER</h1>

        <div class="modals">
            
        </div>
    </div>
    <form action="#" method="POST" class="input-bar">
        <input type="number" id="barcode-field" autofocus>
    </form>
    <div class="container"></div>
</body>

<script src="script.js"></script>
<script>
    $(".input-bar").submit(function(e){
        e.preventDefault();

        getLoader($(".container"), "black");
        $.ajax({
            url: 'transaction.php',
            type: "POST",
            data: { barcode_result : $("#barcode-field").val()},
            success: function(data){
                setTimeout(function(){
                    $("#barcode-field").val("");
                    $(".container").empty();
                    $(".container").html(data);
                }, 1000)
            }
        })
    })
</script>

</html>