<?php
    @session_start();
    $isAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  
</head>
<body>
    <div class="header">
        <h1 id="logo">Rent A Car <br><span>Besi</span></h1>

        <ul class="nav-bar">
            <li class="nav-item"><a href="index.php">Ballina</a></li>
            <li class="nav-item"><a href="automjetet.php">Automjetet</a></li>
            <li class="nav-item"><a href="rezervo.php">Rezervo</a></li>
            <li class="nav-item"><a href="about.php">About Us</a></li>
            <li class="nav-item"><a href="login.php">Login</a></li>
            <?php if($isAdmin):?>
                 
                <li class="nav-item"><a href="dashboard.php">Dashboard</a></li>
            
            <?php endif;?>
        </ul>
    </div>
    
</body>
</html>



