<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<style>
    body{
    width: 100dvw;
    height: 100dvh;
    overflow-x:hidden;
    /* background-image: url('/Bortapaps2/background1.jpg');
    background-size: cover; 
        background-position: center; 
        background-color: #f0f0f0;  */

    font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
    }
    
.container{
    width: 37dvw;
    height: 85dvh;
    background-color: transparent;
    position: relative;
    display: flex;
    top: 104px;
    left: 55dvw;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.53);
    
}
form {
    margin: auto;
    padding: 20px;
    text-align: center;
}
h4{
    position: relative;
    font-size: 52px;
    top: -67px;
    margin: 84px;
    top: -34px;
}
.input{
    position: relative;
    display: flex;
    flex-direction: column;
    top: -125px;
    width: 523px;
}
#text{
    position: relative;
    margin-bottom: 3vh;
    border: 1px solid;
    height: 5vh;
    padding: 14px;
    border-radius: 20px;
    font-size: 20px;
}
#password{
    position: relative;
    margin-bottom: 5dvh;
    border: 1px solid;
    height: 5vh;
    padding: 14px;
    border-radius: 20px;
    font-size: 20px;

}
h5{
    font-size: 22px;
    position: relative;
    display: flex;
    margin: 11px;
}
button{
    position: relative;
    height: 74px;
    border-radius: 25px;
    font-size: 23px;
    top: -12px;
    left: 2px;
    width: 519px;
}
button:hover{
    background-color: aqua;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-pinterest {
  background: #cb2027;
  color: white;
}
.icons{
    position: relative;
    top: -138px;
}
#icons{
    font-size: 18px;
    width: 20px;
}
p{
    position: relative;
    top: -139px;
    font-size: 16px;
    background-color: white;
    left: 202px;
    width: 116px;
}
hr{
    position: relative;
    top: -110px;
}
.signup{
    width: 42dvw;
    height: 86dvh;
    display: flex;
    background-color: #ffffff;
    position: relative;
    top: -645px;
    left: 1dvw;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.53);

}
#create{
    position: relative;
    top: 0vh;
    width: 369px;
    left: 5dvw;
}
h6{
    position: relative;
    display: flex;
    top: -10dvh;
    left: -4dvw;
    font-size: 47px;
}
#signup{
    margin: auto;
    padding: 20px;
    text-align: center;
}
.input_signup{
    position: relative;
    top: -21dvh;
    left: -4dvw;
    width: 17dvw;
}
#text_signup {
    position: relative;
    width: 30vw;
    margin-bottom: 3vh;
    border: 1px solid;
    height: 5vh;
    padding: 14px;
    border-radius: 20px;
    font-size: 20px;
}
#password_signup{
    position: relative;
    width: 30vw;
    margin-bottom: 3vh;
    border: 1px solid;
    height: 5vh;
    padding: 14px;
    border-radius: 20px;
    font-size: 20px;
}
#button{
    position: relative;
    height: 74px;
    border-radius: 25px;
    font-size: 23px;
    top: -9px;
    left: 2px;
    width: 570px;;
}
#create_signup{
    position: relative;
    display: flex;
    top: -5px;
    width: 379px;
    left: 179px;
    background-color: transparent;
}
.cover{
    position: fixed;
    top: 0;
    left: 0;
    background-color: white;
    width: 49dvw;
    height: 100dvh;
    z-index: 1;
    transition: left 0.5s ease;
}

</style>
<body>
 <div class="container">
 
 <form action="/login" method="post">
    <h4>Login</h4>
    <div class="input">
        <h5>Username</h5>
    <input type="text" id="text" placeholder="Enter Username" name="uname" required >  
        <h5>Password</h5>
    <input type="password" id="password" placeholder="Enter Password" name="psw" required>
    <button>Login</button>
 </div> 
 <hr>
 <p>Or Login to</p>
 <div class="icons">
 <a id="icons" href="#" class="fa fa-facebook"></a>
<a id="icons" href="#" class="fa fa-twitter"></a>
<a id="icons" href="#" class="fa fa-pinterest"></a>
<span>
    <p id="create">Don't have an account?<a class="right" href="#">Create an Account</a></p>
</span>
</div>
</form>
 </div>

 <div class="signup">
    <form action="/signup" method="post" id="signup">
    <h6>Sign In to Bortapaps</h6>
    <div class="input_signup">
    <h5 id="username">Username</h5>
    <input type="text" id="text_signup" placeholder="Enter Username" name="uname" required >  
    <h5 id="username">Email</h5>
    <input type="text" id="text_signup" placeholder="Enter Username" name="uname" required >  
    <h5 id="pass">Password</h5>
    <input type="password" id="password_signup" placeholder="Enter Password" name="psw" required>
    <button id="button">Sign Up</button>
    <p id="create_signup">Already have an account?<a class="left" href="#">Login</a></p>
    </div>
    </form>
 </div>
 <div class="cover">
 </div>
 
<script>
   document.getElementById("create").addEventListener("click", function() {
  document.querySelector('.cover').style.left = 'calc(100vw - 49vw)';
});

document.getElementById("create_signup").addEventListener("click", function() {
  document.querySelector('.cover').style.left = '0';
});

</script>
</body>
</html>