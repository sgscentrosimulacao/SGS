<?php

$resultUsuario = showUser();
$resultConselho = pegarConselho();
$resultInstituicao = pegarInstituicao();



function pegarInstituicao(){

    $conn = abrirDatabase();

    $selectInstituicao= "SELECT tb_instituicao.nomeInstituicao FROM tb_usuario
	                  LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
	                  
                    WHERE tb_usuario.idUsuario = {$_GET['id']}";

    $query = mysqli_query($conn, $selectInstituicao);

    fecharDatabase($conn);

    return $query;


}

function pegarConselho(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_conselho.nomeConselho FROM tb_usuario
	                  LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho
	                  
                    WHERE tb_usuario.idUsuario = {$_GET['id']}";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;


}

function showUser(){
    $conn = abrirDatabase();

    $selectUser= "SELECT * FROM tb_usuario WHERE idUsuario = {$_GET['id']}";

    $query = mysqli_query($conn, $selectUser);

    fecharDatabase($conn);

    return $query;
}

?>