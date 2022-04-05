<?php

    $server="localhost";
    $username="root";
    $password="";
    $dbname="rentacar";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        echo "connecetion failed".mysqli_connect_error();
    }
?>