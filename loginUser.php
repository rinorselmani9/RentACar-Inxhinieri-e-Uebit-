<?php
    include 'dbconfig.php';

    if(isset($_POST['loginBtn'])){

            

            
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "<script>alert('Diqka shkoi gabim!');window.location.href='login.php'</script>";
        }else{
            $username=$_POST['username'];
            $password=$_POST['password'];
            $role="admin";

            $query = ("SELECT * FROM user WHERE Username='$username' and Password='$password' and Role='$role'");

            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result)>=1){
                session_start();

                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                $_SESSION['role']=$role;

                header("location:dashboard.php");
            }else{
                header("location:index.php");
            }

        }  
            
    }else{
        header("location:index.php");
    }

?>