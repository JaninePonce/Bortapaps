<?php
    include('account.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body class="body" onload="get_mode()">


    <div class="login_container" id="login_container">
        <h2 class="login_text">Login</h2><br><br><br>

        <?php if(isset($_GET["error"])){
                $error = $_GET["error"];

                echo '<div class="status-text" id="error_prompt">'.$error.'</div>';
                }
        ?>
            <form action="account.php" method="post" class="login_form" autocomplete="off">

                <div class="login_info">
                    <input type="text" class="input_fields" name="username" id="user" placeholder="Username*" required><br>
                    <div class="password-container">
                    <input type="password" class="input_fields" name="pass" id="pass" placeholder ="Password*" required>
                    <span class="eye material-symbols-outlined" onclick="seePassword(this)">visibility</span>
                    </div>
                    
                </div>

                    <input type="submit" class="submit_button" value="Login" name="submit_button">

                    <div class="signup_text">
                    <span>Don't have an account?</span>&nbsp;<a href="#" onclick="open_signup()">Sign up!</a>
                    </div>
            </form>
    </div>

    <div class="signup_container" id="signup_container">
        <h2 class="login_text">Sign up</h2>
       
            <form action="account.php" method="post" class="signup_form">
                <?php
                    if(isset($_GET["invalid"])){
                        echo '<div class="status-text" id="error_prompt">' .$_GET["invalid"].'</div>';
                    }elseif(isset($_GET["success"])){
                        
                        $success = $_GET["success"];
        
                        echo '<div class="status-text" id="success_prompt">'.$success.'</div>';
                    }
                ?>  

                <div class="signup_info">
                    <input type="text" name="signup_username" id="signup_username" placeholder="Create Username*" minlength="5" class="input_fields" required>
                    <input type="email" name="signup_email" id="signup_email" placeholder="Create email*" class="input_fields" required>

                    <div class="password-container">
                        <input type="password" name="signup_password" id="signup_password" 
                        oninput="checkPassword(this)" 
                        minlength="8" placeholder="Create Password*" class="input_fields" required>
                        <span class="eye material-symbols-outlined" onclick="seePassword(this)">visibility</span>
                        <div class="password-status">
                            <span class="constraints lowercase">• Must have atleast 1 lowercase</span>
                            <span class="constraints uppercase">• Must have atleast 1 uppercase</span>
                            <span class="constraints numcase">• Must have atleast 1 number</span>
                            <span class="constraints specialchar">• Must have atleast 1 special character [!,@,#,$,%,^,&,*,-]</span>
                            <span class="constraints length">• Must have atleast 8 characters</span>
                        </div>
                    </div>
                    
                    <div class="password-container" id="cp_container">
                    <input type="password" name="signup_confirm_password" id="signup_confirm_password" minlength="8" placeholder="Confirm Password*"class="input_fields" required>
                    <span class="eye material-symbols-outlined" onclick="seePassword(this)">visibility</span>
                    
                    </div>
                </div>

                <input type="submit" value="Sign up" class="signup_button" name="signup_button" id="signup_button"> 
                <div class="signup_logintext">
                <span>Already have an acount?</span>&nbsp;<a href="#" onclick="open_login()">Login!</a>
                </div>
                
            </form>

    </div>
    
    <script src="../js/login.js"></script>
    <script>
        $("#signup_confirm_password").keyup(function(){
            pass = $("#signup_password").val();
            confirm_pass = $("#signup_confirm_password").val();

            console.log(confirm_pass +" : "+pass);

            if(confirm_pass === ""){
                
                $("#signup_confirm_password").removeClass("bad");
                $("#signup_confirm_password").removeClass("good");
                $(".email.msg").replaceWith("");
            }else{
                if(confirm_pass == pass){
                    $("#signup_confirm_password").removeClass("bad");
                    $("#signup_confirm_password").addClass("good");

                    
                    if($(".signup_info").children(".email.msg").length == 0){
                        $("<span class='email msg good'>Password match!</span>").insertAfter("#cp_container");
                    }else{
                        $(".email.msg").replaceWith("<span class='email msg good'>Password match!</span>");
                    }
                }else{
                    $("#signup_confirm_password").removeClass("good");
                    $("#signup_confirm_password").addClass("bad");

                    if($(".signup_info").children(".email.msg").length == 0){
                        $("<span class='email msg error'>Password don't match!</span>").insertAfter("#cp_container");
                    }else{
                        $(".email.msg").replaceWith("<span class='email msg error'>Password don't match!</span>");
                    }
                }
            }
        })
    </script>
</body>

</html>