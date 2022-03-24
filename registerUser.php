<?php
    include 'dbconfig.php';

    if(isset($_POST['registerBtn'])){

        $id=rand(100,999);
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $em=$_POST['email'];

        if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['username'])){
            echo "Please fill all fields";
        }else{
            $sql = "INSERT INTO user (ID,Username,Password,Email, Role) VALUES ('$id','$user','$pass','$em','user')";

            if ($conn->query($sql) === TRUE) {
                header("location:index.php");
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        }
    }  else {
        echo "something wrong";
    }  
    
    

?>