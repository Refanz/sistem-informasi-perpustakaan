<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: ../form-login.php");
    exit;

}



?>