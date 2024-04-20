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