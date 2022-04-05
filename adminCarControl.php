<?php
    include "dbconfig.php";

    if(isset($_POST['add'])){
        $id = $_POST['id'];
        $emri = $_POST['emri'];
        $qmimi = $_POST['qmimi'];
        $foto = $_FILES["foto"]["name"];

        $extension = substr($foto,strlen($foto)-4,strlen($foto));

        $allowed_extensions = array(".jpg","jpeg",".png",".gif");

        if(!in_array($extension,$allowed_extensions)){
            echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        }else{
            $fotonew=md5($foto).$extension;
            move_uploaded_file($_FILES["foto"]["tmp_name"],"images/".$fotonew);



        mysqli_query($conn, "INSERT INTO veturat (ID, Emri, Qmimi, FotoPATH) VALUES ('$id','$emri','$qmimi','$foto')");
        header('location: dashboard.php');
    }
}



?>