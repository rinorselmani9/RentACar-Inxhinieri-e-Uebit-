
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

    <style>
        #date-label{
            height:0;
            position:static;
            padding-left:0px;
            margin-bottom:5px;
        }
        select{
            width:100%;
            padding:10px;
            padding-left:0px;
            outline: 0;
            border: 1px solid #fff;
            background:transparent;
            font-size: 15px;
        }
    </style>

    <title>Rezervo</title>

</head>

<body>

    <?php
        include "includes/header.php";
    ?>

        <!--<img src="images/photo1.jpg">-->

    </div>

    <div class="rezervo">

        <form method="post" action="addReservation.php" name="reservationForm">     
            

            <div class="input-group">
                <input type="text" id="name" name="emri" required>
                <label for="name"><i class="fas fa-user"></i> Emri dhe Mbiemri</label>
            </div>
    
            <div class="input-group">
                <input type="text" id="number" name="telefoni" required>
                <label for="numbers"><i class="fas fa-phone-square-alt"></i> Telefoni</label>
            </div>
    
            <div class="input-group">
                <label id="date-label" for="message">Nga data:</label>
                <input id="nga" type="date" name="nga" required>
            </div>

            <div class="input-group">
                <label id="date-label" for="message">Deri më:</label>
                <input type="date"  name="deri" required>
            </div>

            <div class="input-group">
                <label id="date-label" for="message">Vetura</label>
                <select id="cars" name="vetura">
                    <option value="BMW">BMW M4</option>
                    <option value="Audi">Audi A3</option>
                    <option value="VW">Golf 8</option>
                    <option value="Tesla">Tesla S</option>
                    <option value="Porsche">Porsche Panamera</option>
                    <option value="Mercedes">Mercedes C Class</option>
                </select>
            </div>

            <button type="submit" id="reserve-button" value="Rezervo" name="rezervoBtn">Rezervo <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>
    
    
</body>

</html>