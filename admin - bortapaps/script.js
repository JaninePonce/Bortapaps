$(".options").each(function(){
    $(this).change(function(){
        field = $(this).parent().parent().children("#other-field");
        if($(this).val() === "Others"){
            field.removeClass("hidden");
        }else{
            field.addClass("hidden");
        }
    })
})

function getLoader(element, color){
    element.empty();
    $.ajax({
        url: "loader.php",
        type: "POST",
        data: {color},
        success: function(data){
            element.html(data);
        }
    })
}



$(document).ready(function(){
    $(".item .eye").each(function(){
        $(this).click(function(){
            $(".modals").removeClass("hidden")
            product_id = $(this).prev().val();
            $.ajax({
                url: "modals.php",
                type: "POST",
                data: {product_id},
                success:function(data){
                    $(".modals").html(data)
                }

            })
        })
    })

})
