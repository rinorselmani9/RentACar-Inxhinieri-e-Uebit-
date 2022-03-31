<?php
    @session_start();
    if(isset($_SESSION['username'])){
        header("location:dashboard.php");
    }else{
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <!--Pjesa e Headerit (Logo dhe navigation bar)-->

    <?php
        
        include "includes/header.php";
    ?>

    <!--Pjesa Login forma-->

    <div class="container">

        <form class="login-form" id="loginF" action="loginUser.php" method="post" name="myform" onsubmit=" return validation()"> 

            <h2 id="form_heading">Login</h2>
            </br>
            <input type="text" id="username" name="username" placeholder="Username" autofocus>

            <p class="warning warning_hide" id="username_warning">Username can't be empty</p>
            </br>
            <input type="password" id="password" name="password" placeholder="Password">

            <p class="warning warning_hide" id="password_warning">Invalid password</p></br>
            <br>
            <input type="submit" value="Login" name="loginBtn" id="login_button" >
            
            <input type="button" value="Register" id="register_button">


        </form>   
        <form class="register-form form_hide" id="registerF" action="registerUser.php" method="post" name="registerForm" onsubmit= "return rValidation()"> 

            <h2 id="form_heading">Register</h2>
            </br>
            <input type="text" id="username" name="username" placeholder="Username" autofocus>

            <p class="warning warning_hide" id="username_warning">Username can't be empty</p>
            </br>
            <input type="password" id="password" name="password" placeholder="Password">
            
            <p class="warning warning_hide" id="password_warning">Password needs to be at least 6 characters long</p></br>
            
            <input type="email" id="email" name="email" placeholder="Email">
            <br>
            <input type="submit" value="Register" name="registerBtn" id="register_button">

        </form>   


    </div>
    <script src="login.js"></script>

</body>
</html>
<?php
}
?>
