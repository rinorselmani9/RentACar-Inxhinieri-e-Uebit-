<?php
    include 'dbconfig.php';
    $users = mysqli_query($conn, "SELECT * FROM user");
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
    
</head>
<body>
    <h3>Users</h3>
    <?php
    if(mysqli_num_rows($users)>0){
    ?>
    <table>
        <tr id="table-heading">
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Password</td>
            <td>Role</td>
            <td colspan="2">Action</td>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($users)){
                
        ?>
        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['Username'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Password'];?></td>
            <td><?php echo $row['Role'];?></td>
            <td>
                <a style="color:blue;" href="userUpdate.php?edit=<?php echo $row['ID']; ?>">Edit</a>
            </td>
            <td>
                <a style="color:blue;" href="adminUserControl.php?del=<?php echo $row['ID'];?>">Delete</a>
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