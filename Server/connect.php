<?php
    $hostname = "localhost";
    $username = "id13652374_billvunguyen";
    $password = "Bill-2551999";
    $databasename ="id13652374_billmp3";

    $con = mysqli_connect ($hostname,$username,$password,$databasename);
    if($con){
        echo"Succes";
    }else{
        echo"Error";
    }
    mysqli_query($con,"SET NAMES 'utf8'");
?>

