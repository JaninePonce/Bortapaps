

login_container = document.querySelector("#login_container");
signup_container = document.querySelector("#signup_container");

let body = document.querySelector("body");
let profile_container = document.getElementById("profile_container");

function open_signup(){

    login_container.classList.remove('active');
    
    signup_container.classList.add('active');

    set_mode("signup");
}


function open_login(){
    signup_container.classList.remove('active');

    login_container.classList.add('active');

    set_mode("login");
}


function set_mode(mode){
    localStorage.setItem("mode", JSON.stringify(mode));
}


function get_mode(){
    let mode = JSON.parse(localStorage.getItem("mode"));

    if(mode == "signup"){
        signup_container.classList.add('active');
    }else{
        login_container.classList.add('active');
    }
}

function seePassword(button){
    let text = button.innerHTML;

    let passField = button.parentElement.querySelector("input");

    if(text == "visibility"){
        button.innerHTML = "visibility_off";
        passField.type = "text";
    }else{
        button.innerHTML = "visibility";
        passField.type = "password";
    }
}


function open_edit(){
    body.classList.toggle("blur_effect", true);

    profile_container.classList.toggle('active', true);
}

$("input[type=password").each(function(){
    $(this).keydown(function(key){
        if(key.keyCode == 32){
            return false;
        }
    })
})



$(".password-status").hide();

$("#signup_password").focusin(function(){
    $(".password-status").show();
})

$("#signup_password").focusout(function(){
    $(".password-status").hide();
})


function checkPassword(field){
    text = field.value;

    check = new RegExp("(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*-])[A-Za-z0-9!@#$%^&*-]{8,}");
    
    if(check.test(text)){
        field.classList.remove("bad");
        field.classList.add("good");
        field.setCustomValidity('');
    }else if(text.length == 0){
        field.classList.remove("good");
        field.classList.remove("bad");
    }else{
        field.setCustomValidity('Password too weak!')
        field.classList.remove("good");
        field.classList.add("bad");
    }


        lowercase = new RegExp('[a-z]');
        if(lowercase.test(text)){
            $('.lowercase').addClass("good");
        }else{
            $('.lowercase').removeClass("good");
        }

        uppercase = new RegExp('[A-Z]');
        if(uppercase.test(text)){
            $('.uppercase').addClass("good");
        }else{
            $('.uppercase').removeClass("good");
        }

        numcase = new RegExp('[0-9]');
        if(numcase.test(text)){
            $('.numcase').addClass("good");
        }else{
            $('.numcase').removeClass("good");
        }

        specialChar = new RegExp("[!@#$%^&*-]");
        if(specialChar.test(text)){
            $('.specialchar').addClass("good");
        }else{
            $('.specialchar').removeClass("good");
        }

        len = text.length;
        if(len >= 8){
            $('.length').addClass("good");
        }else{
            $('.length').removeClass("good");
        }
}


$("#signup_username").keyup(function(){
    $text = $("#signup_username").val();
    $.ajax({
        url: 'account.php',
        type: 'POST',
        data: {user_check : $text},
        success: function(data){
            if($(".signup_info").children(".user.msg").length == 0){
                $(data).insertAfter("#signup_username");
                }else{
                $(".user.msg").replaceWith(data);
            }
        }
    })
})