<?php
    include 'dbconfig.php';
    $rezervimet = mysqli_query($conn, "SELECT * FROM rezervimet");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <style>
        table{
            border-collapse: collapse;
            width: 80%;
            margin:auto;
        }
        #table-heading{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: black;
        }
        td{
            border:2px solid black;
            font-family: 'Rubik', sans-serif;
        }
        h3{
            text-align:center;
            font-family: 'Rubik', sans-serif;
        }
    </style>

    <title>Rezervimet</title>
</head>
<body>
    <h3>Rezervimet</h3>

    <?php
        if(mysqli_num_rows($rezervimet)>0){
    ?>
    <table>
        <tr id="table-heading">
            <td>ID</td>
            <td>Emri</td>
            <td>Telefoni</td>
            <td>Nga</td>
            <td>Deri</td>
            <td>Vetura</td>
        </tr>
        <?php
            $i=0;
            $date = date('y-m-d');
            while($row = mysqli_fetch_array($rezervimet)){
                
        ?>
        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Emri'];?></td>
            <td><?php echo $row['Telefoni'];?></td>
            <td><?php echo $row['Nga'];?></td>
            <td><?php echo $row['Deri'];?></td>
            <td><?php echo $row['Vetura'];?></td>
            <td><?php echo "".$date?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
        
        
    </table>
    <?php
        }else{
            echo "No results were found";
        }
    ?>
    
</body>
</html>