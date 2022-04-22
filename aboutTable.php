<?php
    include 'dbconfig.php';
    $about = mysqli_query($conn, "SELECT * FROM about");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>About</title>
</head>
<body>
<h3>About</h3>

<?php
    if(mysqli_num_rows($about)>0){
?>
<table>
    <tr id="table-heading">
        <td>ID</td>
        <td>Title</td>
        <td>Text</td>
        <td>Foto</td>
        <td>Action</td>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($about)){
            
    ?>
    <tr>
        <td><?php echo $row['ID'];?></td>
        <td><?php echo $row['Title'];?></td>
        <td><?php echo $row['Text'];?></td>
        <td><?php echo $row['Foto'];?></td>
        <td>
                <a style="color:blue;" href="aboutControl.php?del=<?php echo $row['ID'];?>">Delete</a>
        </td>
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