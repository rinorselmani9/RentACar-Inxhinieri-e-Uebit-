<?php

    $server="localhost";
    $username="root";
    $password="";
    $dbname="rentacar";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        echo "connecetion failed".mysqli_connect_error();
    }else{
        echo "connected succesfully";
    }

    // $sql = "INSERT INTO user(ID,Username,Password,Email) VALUES ('112','agon','123123123131','agonk@gmail.com')";

    

?>