<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: Login.php");
        die();
    }
    $logsession=$_SESSION["user"];
?>