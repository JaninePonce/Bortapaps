<?php
include('../components/connection.php');

function validate($text){
    $text = trim($text);
    $text = stripslashes($text);
    $text = htmlspecialchars($text);
    return $text;
}

if(isset($_POST['user_check'])){
    $user = validate($_POST['user_check']);

    if(empty($user)){
        echo "";
    }else if(strlen($user) < 5){
        echo "
        <span class='user msg error'>Username must be 5 characters or more!</span>
        ";
    }
    else{
        $sql = "SELECT * FROM users WHERE username = '$user'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo '<span class="user msg error">Username already taken!</span>';
        }else{
            echo '<span class="user msg good">Username is available!</span>';
        }
    }
}

if(isset($_POST['email_check'])){
    $email = validate($_POST['email_check']);

    if(empty($email)){
        echo "";
    }else if(strlen($email) < 5){
        echo "<span class='msg error'>Username must be 5 characters or more!</span>";
    }
    else{
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo '<span class="msg error">Username already taken!</span>';
        }else{
            echo '<span class="msg good">Username is available!</span>';
        }
    }
}


if(isset($_POST['submit_button'])) {

    
            
    $user = validate($_POST['username']);
    $pass = validate($_POST['pass']);

    $sql = "SELECT * FROM users where username = '$user';";
    $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            
            $row = mysqli_fetch_assoc($result);

            if(password_verify($pass, $row['password']) || $pass == $row['password']){
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $row['id'];
                $_SESSION['compare_list'] = array();
                header("Location: ../index.php");
            }else{
                echo '<script>
                    window.location.href = "login.php?error=Password is incorrect!";
                    </script>';
            }

            
            // $sql = "SELECT * FROM profile_table where user = '" .$_SESSION['user']."'";
            // $result = mysqli_query($conn, $sql);
            // $row = mysqli_fetch_assoc($result);
            // $count = mysqli_num_rows($result);

            
            // $_SESSION['fname'] = $row['firstname'];
            // if($count == 1){
                
                
            // }else{
            //     header("Location: registrationForm/regform.php");
            // }

        }else{
            echo '<script>
                    window.location.href = "login.php?error=Username not found!";
                    </script>';
        }   
    }


if(isset($_POST['signup_button'])){

    $user = validate($_POST['signup_username']);
    $email = validate($_POST['signup_email']);
    $pass = validate($_POST['signup_password']);
    $confirm_pass = validate($_POST['signup_confirm_password']);

    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM users where username = '$user' OR email = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);

        if($count > 0){
            header("Location: login.php?invalid=Username or Email already taken!");
        }elseif($pass != $confirm_pass){
            header("Location: login.php?invalid=Password dont match!");
        }else{
            $sql = "INSERT INTO users (username, email, `password`) VALUES ('$user','$email','$hash_pass')";
            $result = mysqli_query($conn, $sql);
            header("Location: login.php?success=Sucessfully registered!");
        }
    }
}


if(isset($_GET['user']) && isset($_GET['pass'])){
    $user = (string) $_GET['user'];
    $pass = $_GET['pass'];

    $sql = "SELECT * FROM users WHERE `username` = '$user'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        if($row['password'] == $pass){
            session_start();
            
            $_SESSION['user'] = $user;
            $_SESSION['id'] = $row['id'];
            $_SESSION['compare_list'] = array();
            header("Location: ../index.php");
        }
    }
}
?>