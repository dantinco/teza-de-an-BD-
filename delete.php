<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id_catalog=$_GET['deleteid'];

    $sql="DELETE FROM `catalog` WHERE `id_catalog`='$id_catalog'";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}

?>