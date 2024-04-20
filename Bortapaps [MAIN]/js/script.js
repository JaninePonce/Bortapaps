function updateCart(){
    $.ajax({
    type: "POST",
    url: 'cart/cart.php',
    success: function(data){
        $('#cart').html(data);
    }
})}

$(".product-item #wishlist-form").each(function(){
    $(this).click(function(e){
        e.preventDefault();
        
        let wishlist_productId = $(this).children("#productId").val();
        $.ajax({
            type:'POST',
            url: 'items/wishlist.php',
            data: {wishlist_productId},
            success: function(data){
                getWishlist();
                Swal.fire({
                    title: "Added to wishlist!",
                    imageUrl: "../resources/Heart.gif",
                    imageWidth: 200,
                    imageHeight: 150,
                    imageAlt: "Custom image",
                    showConfirmButton: false,
                    timer: 1500
                  });
            }
        })
    })
})


$(".product-item #item-form").each(function(){
$(this).click(function(e){
  e.preventDefault();
  let pid = $(this).children("#productId").val();

  $.ajax({
          type: 'POST',
          url: 'cart/add-to-cart.php',
          data: { pid },
          success: function(data){

              getCartNum();
              updateCart();

              Swal.fire({
                position: "center",
                icon: "success",
                title: "Added to cart!",
                showConfirmButton: false,
                timer: 1500
              });
          }
      })
  })
})

function getCartNum(){
    $.ajax({
        url: './cart/add-to-cart.php',
        success:function(data){
            $('.user-cart').html(data);
        }
    })
}
    getCartNum();
    updateCart();
    getWishlist();


    
$(".wishlist-button").click(() => {
    $('#wishlist').addClass("show");
    getWishlist();
    });

$(".close-btn").each(function(){
    $(this).click(function(){
        $(".sidebar").each(function(){
            $(this).removeClass("show");
        })
    })
})

function getWishlist(){
    $.ajax({
    url: "../items/wishlist.php",
    success: function(data){
        $(".wishlist").html(data);
    }
    })
}

$(".product-item .quick-view").each(function(){
    $(this).click(function(){
        $.ajax({
            url: "../components/quick-view.php",
            success: function(data){
                $(".popup-section").html(data);
            }
        })
    })
})