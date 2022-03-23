
<!DOCTYPE html>
<html lang="en">
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

    <title>Rent A Car Besi</title>


</head>
<body>

    <!--Pjesa e Headerit (Logo dhe navigation bar)-->

    <?php
        include "includes/header.php";
    ?>

    <!--Pjesa kryesore e faqes (Text dhe foto)-->

    <div class="main">
        <div class="main-text">
            <h3 id="main-heading">Rent A Car <br>BESI</h3>
            <p id="main-p">Merr me qira veturen tuaj te preferuar <br>me çmimet me te lira ne treg.</p>
            <button id="btn" type="submit" onclick="window.location.href='rezervo.php'">Rezervo</button>
        </div>

        <div class="main-image">
            <img src="images/photo1.jpg" id="first-image"alt="" srcset="">
        </div>
    </div>

    <hr>

    <!--Pjesa e slider(Foto te veturave)-->

    <div class="slideshow-container">
        <img name="slide" width="100%" height="936px"/>
    </div>
  
    
    <hr>
    <!--Pjesa e footer-->

    <?php
        include "includes/footer.php";
    ?>

    <script src="app.js"></script>
</body>
</html>

