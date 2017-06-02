<?php

require "../Control/controleDoBanco.php";

$resultDisciplina = showDisciplina();
$resultCurso = showCursos();
$resultSalas = showSalas();
$resultConselho = showConselhos();
$resultInstituicao = showInstituicao();


function showDisciplina(){

    $conn = abrirDatabase();

    $selectDisciplinas= "SELECT tb_disciplina.nomeDisciplina FROM tb_disciplina";

    $query = mysqli_query($conn, $selectDisciplinas);

    fecharDatabase($conn);

    return $query;

}

function showCursos(){

    $conn = abrirDatabase();

    $selectCursos= "SELECT tb_cursos.nomeCurso FROM tb_cursos";

    $query = mysqli_query($conn, $selectCursos);

    fecharDatabase($conn);

    return $query;
}

function showSalas(){

    $conn = abrirDatabase();

    $selectSalas= "SELECT tb_sala.nomeSala FROM tb_sala";

    $query = mysqli_query($conn, $selectSalas);

    fecharDatabase($conn);

    return $query;
}

function showConselhos(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_conselho.nomeConselho FROM tb_conselho";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;
}

function showInstituicao(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_instituicao.nomeInstituicao FROM tb_instituicao";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;

}
?>
