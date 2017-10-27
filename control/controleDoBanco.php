<?php

include "config.php";

function abrirDatabase(){

    try{
        $conn = new mysqli(db_host,db_username, db_password, db_Name);
        $conn->set_charset("utf8");
        return $conn;

    } catch (Exception $e){
        echo $e->getMessage();
        return null;
    }
}

function fecharDatabase($conn){
    try{
        mysqli_close($conn);

    } catch (Exception $e){
        echo $e->getMessage();

    }
}

?>
