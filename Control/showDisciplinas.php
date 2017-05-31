<?php

require "../Control/controleDoBanco.php";

$result2 = showAula();


function showAula(){

    $conn = abrirDatabase();


    $selectDisciplinas= "SELECT tb_disciplina.nomeDisciplina FROM tb_disciplina";

    return mysqli_query($conn, $selectDisciplinas);


}
?>
