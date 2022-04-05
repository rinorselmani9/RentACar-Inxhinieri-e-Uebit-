<?php
    include ('dbconfig.php');
    $veturat = mysqli_query($conn, "SELECT * FROM veturat");
?>
<html>
<head>
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
    
    <style>
        p{
            font-family: 'Rubik', sans-serif;
        }
    </style>

    <title>Automjetet</title>
</head>

<body>
    <?php
        include "includes/header.php";
    ?>
    <div class="Fotot">
    <?php
        if(mysqli_num_rows($veturat)>0){
            
            $i=0;
            while($row = mysqli_fetch_array($veturat)){
                $img = $row['FotoPATH'];
    ?>
    
        <div class="foto2">
        <img src="images/<?php echo $img;?>" class="foto2">
        <div class="button"><a href="rezervo.php">Rezervo</a></div>
        <h1 id="fonts"><?php echo $row['Emri'] ?></h3>
        <p id="fonts"><?php echo $row['Qmimi'] ?>&euro;/Dita</p>
        </div>

    
    <?php
        $i++;
            }
        }
    ?>
    </div>

    <!--Footer-->

    <?php
        include "includes/footer.php";
    ?>
 


</body>
</html>