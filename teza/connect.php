<?php

$con=new mysqli('localhost','root','','vin');

if(!$con){
    die(mysqli_error($con));
}
?>