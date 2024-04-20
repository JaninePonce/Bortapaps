<style>
    #qrcode {
        width:160px;
        height:160px;
        
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .qr-container{
        background-color: blue;

        height: 160px;
        width: 160px;
        border-radius: 20px;
    }
</style>

<div class="qr-container">
    <div id="qrcode"></div>
</div>

<script src="qrcode.js"></script>
<script src="qrcode.min.js"></script>
<script type="text/javascript">

var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: "http://jindo.dev.naver.com/collie",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});

qrcode.makeCode("http://localhost:3000/index.php#");

</script>
