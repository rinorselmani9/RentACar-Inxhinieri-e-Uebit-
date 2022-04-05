<?php
    include("dbconfig.php");
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $emri = $_POST['emri'];
        $qmimi = $_POST['qmimi'];
    
        mysqli_query($conn, "UPDATE veturat SET Emri='$emri', Qmimi='$qmimi' WHERE ID=$id");
        header('location: dashboard.php');
    }
?>    