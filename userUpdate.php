<?php
    include ('dbconfig.php');
    if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$row = mysqli_query($conn, "SELECT * FROM user WHERE ID=$id");

		if (mysqli_num_rows($row) == 1 ) {
			$n = mysqli_fetch_array($row);
			$user = $n['Username'];
			$pass = $n['Password'];
            $em = $n['Email'];
            $role = $n['Role'];
		}
	}
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

    <title>Edit User</title>
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
        .update-input{
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
    <form action="adminUserControl.php" method="post" id="update-form" >
        <h2>Edit User</h2>

        <input type="hidden" name="id" value="<?php echo $id; ?>"/>

        <input class="update-input"type="text" name="username" value="<?php echo $user ?>"/>
        <input class="update-input"type="text" name="password" value="<?php echo $pass ?>"/>
        <input class="update-input"type="text" name="email" value="<?php echo $em ?>"/>
        <input class="update-input"type="text" name="role" value="<?php echo $role ?>"/>

        <button class="btn" type="submit" name="update">Update</button>
    </form>
    
</body>
</html>