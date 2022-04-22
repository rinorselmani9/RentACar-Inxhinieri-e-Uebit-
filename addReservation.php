<?php
    include "dbconfig.php";
    $daten = date('Y-m-d');    
    if(isset($_POST['rezervoBtn'])){
        $emri=$_POST['emri'];
        $telefoni=$_POST['telefoni'];
        $nga=$_POST['nga'];
        $deri=$_POST['deri'];
        $vetura=$_POST['vetura'];
        
        if(empty($_POST['emri']) || empty($_POST['telefoni']) || empty($_POST['nga']) || empty($_POST['deri']) || empty($_POST['vetura'])){
            echo "<script>alert('Diqka shkoi gabim!'); window.location.href='rezervo.php';</script>";
        } else if($daten >= $nga){ 
            echo "<script>alert('Data e rezervimit duhet te filloj nga nesër!'); window.location.href='rezervo.php';</script>";
        } else {
            $sql = "INSERT INTO rezervimet (Emri,Telefoni,Nga,Deri,Vetura) VALUES ('$emri','$telefoni','$nga','$deri','$vetura')";
            if ($conn->query($sql) === TRUE) {
                header("location:index.php");
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        }
    } else {
        echo "something wrong";
    }  

?>