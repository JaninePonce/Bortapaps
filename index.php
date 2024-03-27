<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<style>
    body{
        background-color: #333;
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        
        }

    .item-popup {
        height: 40vh;
        width: 50vw;
        background-color: rgb(0,0,0, 0.2);
        border-radius: 20px;
        z-index: 1;
        display: none;
    }

    .item-popup.show {
        display: flex;
        flex-direction: row;
    }

    .details {
        padding: 20px;
        color: white;
    }

    #item {
        position: absolute;
        top: 50px;
    }

</style>


<body>
    
        <input type="button" value="item" id="item">


        <div class="item-popup">
            <img src="/Bortapaps2/pictures/collection-1.jpg"  width="300px">
            <div class="details">
                <h2 class="name">Shoes nako</h2>
                <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia commodi tempora quam eum iste totam, expedita perspiciatis laudantium minima odit sapiente, accusamus unde. Veritatis repellat consectetur tempore libero aliquid ipsum.</div>

            </div>
        </div>


        <script>

            // $('#item').click(function(){
            //    document.querySelector(".item-popup").classList.toggle("show");
            // })

            document.querySelector("#item").addEventListener("click", function(){
                document.querySelector(".item-popup").classList.toggle("show");
            })

        </script>

</body>
</html>