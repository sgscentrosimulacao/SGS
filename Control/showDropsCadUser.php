<?php

include_once "controleDoBanco.php";

$resultConselho = showConselhos();
$resultInstituicao = showInstituicao();


function showConselhos(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_conselho.nomeConselho, tb_conselho.idConselho FROM tb_conselho ORDER BY tb_conselho.nomeConselho ASC";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;
}

function showInstituicao(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_instituicao.nomeInstituicao,tb_instituicao.idInstituicao FROM tb_instituicao ORDER BY tb_instituicao.nomeInstituicao ASC";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;

}
?>
