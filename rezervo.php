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
    <script src="https://kit.fontawesome.com/8580289030.js" crossorigin="anonymous"></script>

    <title>Rezervo</title>

</head>

<body>

    <?php
        include "includes/header.php";
    ?>

        <!--<img src="images/photo1.jpg">-->

    </div>

    <div class="rezervo">

        <form>     
            

            <div class="input-group">
                <input type="text" id="name" required>
                <label for="name"><i class="fas fa-user"></i> Emri dhe Mbiemri</label>
            </div>
    
            <div class="input-group">
                <input type="text" id="number" required>
                <label for="numbers"><i class="fas fa-phone-square-alt"></i> Telefoni</label>
            </div>
    
            <div class="input-group">
                <input type="email" id="email" required>
                <label for="email"><i class="fas fa-envelope"></i> Email </label>
            </div>
    
            <div class="input-group">
                <textarea type="message" rows="8" required></textarea>
                <label for="message"><i class="fas fa-comments"></i> Vetura dhe datat</label>
            </div>
            <button type="submit" id="reserve-button">Rezervo <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>
    
</body>

</html>