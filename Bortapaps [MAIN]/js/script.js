function updateCart(){
    $.ajax({
    type: "POST",
    url: 'cart/cart.php',
    success: function(data){
        $('.cart-bar').html(data);
    }
})}


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
    
    

    