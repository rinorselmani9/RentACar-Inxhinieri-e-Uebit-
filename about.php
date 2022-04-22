<?php
    include ('dbconfig.php');
    $about = mysqli_query($conn, "SELECT * FROM about");
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

    <style>
        body{
            background-color: #D9CAB3;
        }
        .about{
            text-align:center;
            justify-content:center;
            margin:auto;
            padding-bottom:50px;
            background-color:#D9CAB3;
        }
        .foto{
            width: 850px;
            height:430px;
        }
        #heading{
            font-family: 'Rubik', sans-serif;
            text-align:left;
        }
        #paragraf{
            font-family: 'Rubik', sans-serif;
            font-size:18px;
        }
    </style>
    <title>About Us</title>
</head>
<body>
    <?php
            
            include "includes/header.php";
    ?>
    <body>
    
    <div class="Fotot">
    <?php
        if(mysqli_num_rows($about)>0){
            
            $i=0;
            while($row = mysqli_fetch_array($about)){
                $img = $row['Foto'];
    ?>
    
        <div class="about">
        <h1 id="heading"><?php echo $row['Title'] ?></h3>
        <p id="paragraf"><?php echo $row['Text'] ?></p>
        <img src="images/<?php echo $img;?>" class="foto">
        </div>

    
    <?php
        $i++;
            }
        }
    ?>
    </div>


    <?php
            include "includes/footer.php";
    ?> 
</body>
</html>