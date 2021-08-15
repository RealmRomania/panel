<?php
    session_start();
    if(!isset($_SESSION["login-usernamea"])) {
        header("Location: login.php");
        exit();
    }
?>