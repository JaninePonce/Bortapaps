<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<div class="popup">
    <div class="popup-container">
    <span class="material-symbols-outlined close-btn">close</span>
        <div class="item-preview">
            <img src="../products/men bomber jacket.jpg" alt="">
            <div class="details">
                <h1 style="font-size: 40px;">Lorem ipsum</h1>
                <div class="id-details"><span>NO: 91234127462</span> <span>Category: Mens</span></div>
                <div class="desc">
                    <h3>Php 215.12</h3>
                    <br><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga officiis dignissimos ratione, dolor recusandae laborum sequi, iste corporis nisi quaerat ullam atque odit labore ipsam voluptate, iure laudantium a explicabo.</span>
                </div>
                <div class="popup-options">
                    <div class="qty-container">
                        <h4>Qty: </h4>
                        <button onclick="if(this.nextElementSibling.value > 1)this.nextElementSibling.stepDown()">-</button>
                        <input type="number" style="width: 40px;" name="item-qty" id="item-qty" value="1">
                        <button onclick="this.previousElementSibling.stepUp()">+</button>
                    </div>

                    <div class="popup-buttons">
                        <button class="cart-btn">Add to Cart</button>
                        <span class="material-symbols-outlined heart-btn">favorite</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".popup .close-btn").click(function(){
        $(".popup-section").empty();
    })
</script>