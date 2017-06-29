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

        $verificaHora = "SELECT * FROM `tb_aulas` WHERE (tb_aulas.horarioInicio BETWEEN '{$horaInicio}' AND '{$horaFim}') AND (tb_aulas.horarioFim BETWEEN '{$horaInicio}' AND '{$horaFim}')";

        $verificaData = "SELECT * FROM `tb_aulas` WHERE (tb_aulas.dataInicio BETWEEN '{$dataInicio}' AND '{$dataFim}') AND (tb_aulas.dataFim BETWEEN '{$dataInicio}' AND '{$dataFim}')";

        $queryData = $conn->query($verificaHora);
        $queryHora = $conn->query($verificaData);


        if ((($queryData->num_rows)>1) || (($queryHora->num_rows)>1)){
            echo "Erro";
        }else{


        }
}
?>