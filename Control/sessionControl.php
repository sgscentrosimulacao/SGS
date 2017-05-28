<?php
 @session_start();

 if (isset($_SESSION['usuario'])){

 }else{
    header("Location: ../Vision/index.php");
 }
?>