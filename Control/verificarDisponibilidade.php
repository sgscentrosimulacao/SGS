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

    $verificaHora = "SELECT * FROM `tb_aulas` WHERE ((tb_aulas.horarioInicio BETWEEN '{$horaInicio}' AND '{$horaFim}')
                                                        OR (tb_aulas.horarioFim BETWEEN '{$horaInicio}' AND '{$horaFim}'))
                                              AND ((tb_aulas.horarioInicio!= '{$horaFim}') AND (tb_aulas.horarioFim!= '{$horaInicio}'))";

    //$verificaData = "SELECT * FROM `tb_aulas` WHERE (tb_aulas.dataInicio BETWEEN '{$dataInicio}' AND '{$dataFim}') AND (tb_aulas.dataFim BETWEEN '{$dataInicio}' AND '{$dataFim}')";

    //$queryData = $conn->query($verificaData);
    $queryHora = $conn->query($verificaHora);


    if ((($queryHora->num_rows)>0)){
        echo "Erro";
    }else{


    }
}
?>