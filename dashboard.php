<?php
    @session_start(); 
    if(!isset($_SESSION['role']) || $_SESSION['role']!=='admin'){
        header("location:login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    include "includes/header.php";
    ?>

    <div>
        <h1>dashboard</h1>

        <a href="logout.php" style="color:red">Logout</a>
    </div>
    

    <?php
    include "includes/footer.php";
    ?>    
</body>
</html>

