
    function updateCart(){
        $.ajax({
        url: '../cart/cart.php',
        success: function(data){
            $('.cart-bar').html(data);
        }
    })}

    function getCartNum(){
        $.ajax({
            url: '../cart/add-to-cart.php',
            success:function(data){
                $('.user-cart').html(data);
            }
        })
    }

    $('.user-cart').click(function(){
            $('.cart-bar').addClass('show');
            $('.login-bar').removeClass('show');
            updateCart();
    })

    $(document).mouseup(function (e) {
        var container = $('.login-bar');
        if(!container.is(e.target) &&
        container.has(e.target).length === 0) {
        container.removeClass('show');  }

    })

    $('#user-btn').click(function(){
        document.querySelector(".login-bar").classList.toggle("show");
    })

    getCartNum();