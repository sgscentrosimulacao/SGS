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

    $dropSala = $_GET['sala'];


    $verificaDisponibilidade = "SELECT * FROM `tb_aulas` 
                                      
                                            WHERE tb_aulas.idSala = '{$dropSala}' AND (((tb_aulas.horarioInicio BETWEEN '{$horaInicio}' AND '{$horaFim}')
                                                        OR (tb_aulas.horarioFim BETWEEN '{$horaInicio}' AND '{$horaFim}'))
                                              AND ((tb_aulas.horarioInicio!= '{$horaFim}') AND (tb_aulas.horarioFim!= '{$horaInicio}')))
                                              
                                              AND
                                              
                                              ((tb_aulas.dataInicio BETWEEN '{$dataInicio}' AND '{$dataFim}')
                                                        OR (tb_aulas.dataFim BETWEEN '{$dataInicio}' AND '{$dataFim}')) AND tb_aulas.aceita = 1";

    $queryDisponibilidade = $conn->query($verificaDisponibilidade);


    if ((($queryDisponibilidade->num_rows)>0)){
        echo "Erro";

    }else{

    }
}
?>