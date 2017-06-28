<?php

include_once "../Control/controleDoBanco.php";

$conn = abrirDatabase();

$selectPlanoEnsino = "SELECT tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina WHERE tb_disciplina.idDisciplina = '{$_GET['id']}'";

$query = mysqli_query($conn, $selectPlanoEnsino);

$planoDeEnsino = mysqli_fetch_assoc($query);



header("Content-Type: application/pdf");


header("Content-Disposition: attachment; filename='{$planoDeEnsino['planoDeEnsino']}'");


readfile($planoDeEnsino['caminhoPlano']);
?>