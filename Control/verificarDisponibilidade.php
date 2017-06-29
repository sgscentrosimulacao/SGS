<?php

include_once "controleDoBanco.php";
include "funcoes.php";

verificarDisponibilidade();

function verificarDisponibilidade(){

        $dataInicio = converteDataToSQL($_GET['dataInicio']);
        $dataFim = converteDataToSQL($_GET['dataFim']);

        $horaInicio = $_GET['horaInicio'];
        $horaFim = $_GET['horaFim'];

        $conn = abrirDatabase();

        $verificaDataInicio = "SELECT * FROM tb_aulas WHERE dataInicio = '{$dataInicio}' AND horarioInicio = '{$horaInicio}'";


echo (rand()%2 > 0) ? "true":"false";
}
?>