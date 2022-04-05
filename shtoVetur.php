<?php
    include 'dbconfig.php';
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
            background-image: linear-gradient(rgba(0,0,0,0.7), #6d9886);
        }
        #update-form{
            margin:auto;
        }
        h2{
            font-family: 'Rubik', sans-serif;
            text-align:center;
            color:#fff;

        }
        .update-car{
            margin-bottom:30px;
            position: relative;
            width:100%;
            padding:10px;
            border: 1px solid #fff;
            color: #fff;
            font-size: 15px;
            font-family: 'Rubik', sans-serif;
        }
        .btn{
            margin-left:240px;
            padding: 10px 30px;
            border-radius: 10px;
            font-size: 1.2rem;
            font-family: 'Rubik', sans-serif;
            background-color:#6d9886;
            border:2px solid #fff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="adminCarControl.php" method="post" enctype="multipart/form-data">
        <h2>Shto Vetur</h2>

        <input type="hidden" name="id" value="<?php echo $id; ?>"/>

        <input class="update-car" type="text" name="emri"/>
        <input class="update-car" type="text" name="qmimi"/>
        <input class="update-car" type="file" name="foto"/>

        <button class="btn" type="submit" name="add">Shto</button>
    </form>
    
</body>
</html>