<?php

include "../Control/config.php";

function abrirDatabase(){

    try{
        $conn = new mysqli(db_host,db_username, db_password, db_Name);
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

function acessoAoBanco($usuario, $senha){

    $testeUsuario = "SELECT * FROM tb_usuario WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

    $conn = abrirDatabase();
    $verifica = $conn->query($testeUsuario);

    fecharDatabase($conn);

    if ($verifica->num_rows>0){

        $conn = abrirDatabase();
        return $conn;
    }

}
?>
