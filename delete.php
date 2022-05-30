<?php
    include('show.php');
    $id = $_GET['id'];
    $delquery = "DELETE FROM `collegetable2` WHERE `sno` = $id";
    $query = mysqli_query($conn,$delquery);
    if($query){
        header('location:table.php');
    }else{
        echo"data is not deleted please try again ";
    }
?>