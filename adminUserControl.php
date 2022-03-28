<?php
    include("dbconfig.php");

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];
    
        mysqli_query($conn, "UPDATE user SET Username='$username', Password='$password', Email='$email', Role='$role' WHERE id=$id");
        header('location: dashboard.php');
    }
    
    if(isset($_GET["del"])){
        $id = $_GET["del"];
        mysqli_query($conn, "DELETE FROM user WHERE id=$id");
        header("location:dashboard.php");
    }    
?>
