<?php

include_once "../Control/controleDoBanco.php";

$resultDisciplina = showDisciplina();
$resultDisciplinaId = showDisciplinaId();

$resultCurso = showCursos();
$resultSalas = showSalas();
$resultConselho = showConselhos();
$resultInstituicao = showInstituicao();


function showDisciplina(){

    $conn = abrirDatabase();

    $selectDisciplinas= "SELECT tb_disciplina.nomeDisciplina FROM tb_disciplina ORDER BY tb_disciplina.nomeDisciplina ASC";

    $query = mysqli_query($conn, $selectDisciplinas);

    fecharDatabase($conn);

    return $query;

}


function showDisciplinaId(){

    $conn = abrirDatabase();

    $selectDisciplinas= "SELECT tb_disciplina.nomeDisciplina FROM tb_disciplina WHERE idUsuario = '{$_SESSION['idUsuario']}' ORDER BY tb_disciplina.nomeDisciplina ASC";

    $query = mysqli_query($conn, $selectDisciplinas);

    fecharDatabase($conn);

    return $query;

}

function showCursos(){

    $conn = abrirDatabase();

    $selectCursos= "SELECT tb_cursos.nomeCurso FROM tb_cursos ORDER BY tb_cursos.nomeCurso ASC";

    $query = mysqli_query($conn, $selectCursos);

    fecharDatabase($conn);

    return $query;
}

function showSalas(){

    $conn = abrirDatabase();

    $selectSalas= "SELECT tb_sala.nomeSala FROM tb_sala ORDER BY tb_sala.nomeSala ASC";

    $query = mysqli_query($conn, $selectSalas);

    fecharDatabase($conn);

    return $query;
}

function showConselhos(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_conselho.nomeConselho FROM tb_conselho ORDER BY tb_conselho.nomeConselho ASC";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;
}

function showInstituicao(){

    $conn = abrirDatabase();

    $selectConselho= "SELECT tb_instituicao.nomeInstituicao FROM tb_instituicao ORDER BY tb_instituicao.nomeInstituicao ASC";

    $query = mysqli_query($conn, $selectConselho);

    fecharDatabase($conn);

    return $query;

}
?>
