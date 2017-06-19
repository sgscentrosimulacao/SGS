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

        $verificaHoraInicio = "SELECT * FROM tb_aulas WHERE horarioInicio = '{$horaInicio}'";

        $verificaDataFim = "SELECT * FROM tb_aulas WHERE dataFim = '{$dataFim}'";

        $verificaHoraFim "SELECT * FROM tb_aulas WHERE horarioFim = '{$horaFim}'";

        $QueryDataInicio = $conn->query($verificaDataInicio);
        $QueryHoraInicio = $conn->query($verificaHoraInicio);
        $QueryDataFim = $conn->query($verificaDataFim);
        $QueryHoraFim = $conn->query($verificaHoraFim);

        if (($QueryDataInicio->num_rows) ){

        }else{

        }

echo (rand()%2 > 0) ? "true":"false";
}
?>