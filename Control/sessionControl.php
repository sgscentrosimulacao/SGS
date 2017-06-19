<?php
 session_start();

 if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != null){
    // echo $_SESSION['usuario']; exit();
 }else{
    header("Location: ../Vision/index.php");
 }
?>