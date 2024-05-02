function updateCart(){
    $.ajax({
    type: "POST",
    url: 'cart/cart.php',
    success: function(data){
        $('#cart').html(data);
    }
})}


function loadItems(item){
    $.ajax({
      url: "items/item-maker.php",
      data: { category},
      success: function(data){
          $(".item-section").html(data);
      }
    })
}

$(".product-list .product-item").each(function(){
    $(this).find(".toWishlistBtn").click(function(e){
        e.preventDefault();

        if($(this).hasClass("liked")) return
        
        let wishlist_productId = $(this).prev().val();
        let heart = $(this).parent()
        $.ajax({
            type:'POST',
            url: 'items/wishlist.php',
            data: {wishlist_productId},
            success: function(data){
                getWishlist();
                likedProduct(heart, true);
                Swal.fire({
                    title: "Added to wishlist!",
                    imageUrl: "resources/Heart.gif",
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


function likedProduct(item, liked){
    $.ajax({
        url: "items/item-maker.php",
        type: "POST",
        data: {liked},
        success: function(data){
            item.html(data)
        }
    })
}


$(".product-item #item-form").each(function(){
    $(this).on("click", function(e){
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
        url: 'cart/add-to-cart.php',
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

$(".search-button").click(function(){
    $("#search").addClass("show");
})


$(".close-btn").each(function(){
    $(this).click(function(){
        $(".sidebar").each(function(){
            $(this).removeClass("show");
        })
    })
})

function getWishlist(){
    $.ajax({
    url: "items/wishlist.php",
    success: function(data){
        $(".wishlist").html(data);
    }
    })
}

$(".product-item .quick-view").each(function(){
    $(this).on("click",function(){
        var btn = $(this);
        btn.prop('disabled',true);
        window.setTimeout(function(){ 
            btn.prop('disabled',false);
        },2000);
        product_id = $(this).parents(".product-item").find("#productId");
        $.ajax({
            url: "components/quick-view.php",
            type: "POST",
            data: { view_productId : product_id.val() },
            success: function(data){
                $(".popup-section").html(data);
                $(".popup-section").removeClass("hidden");
            }
        })
    })
})


$(".product-item .compare-btn").each(function(){
    $(this).click(function(){
        product_id = $(this).parents(".product-item").find("#productId");
        console.log(product_id.val())
        $.ajax({
            url: "components/compare.php",
            type: "POST",
            data: {
                compare_productId : product_id.val()
            },
            success: function(data){
                $(".compare-section").removeClass("hidden");
                $(".compare-section .list").html(data);
            }
        })
    })
})

$(".compare-section .close").click(function(){
    $(".compare-section").addClass("hidden");
})

function findProduct(id){
    $(".product-list .product-item").each(function(){
        if($(this).find(".productId").val() == id){
            console.log($(this))
            alert("found");
        }
    })
}

function removeItemFromWishlist(item_id){
    $.ajax({
        url: "items/wishlist.php",
        type: "POST",
        data: {remove_item_id : item_id.value},
        success: function(data){
            getWishlist();
            
        }
    })
}

function getLoader(element, color){
    element.empty();
    $.ajax({
        url: "components/loader.php",
        type: "POST",
        data: {color},
        success: function(data){
            element.html(data);
        }
    })
}

function getSearchResult(){
    $.ajax({
        url: "components/search.php",
        type: "POST",
        data: { search_word : $("#search-field").val() },
        success: function(data){
            
            getLoader($(".searched-items"), "white");
            setTimeout(function(){
                $(".searched-items").empty();
                $(".searched-items").html(data);
            },1500);
        }
    })
}

$(".search-bar .search").click(function(){
    getSearchResult();
})

$("#search-field").on("keypress", function(e){
    if(e.which === 13){
        getSearchResult();
        
        e.preventDefault();
    }
})

