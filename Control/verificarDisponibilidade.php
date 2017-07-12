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

    $valorDropSala = $_GET['sala'];
    $selectIdSala = "SELECT tb_sala.idSala FROM tb_sala
                        	WHERE tb_sala.nomeSala = '{$valorDropSala}'";
    $sala = $conn->query($selectIdSala);

    $idSala = mysqli_fetch_row($sala);

    $verificaDisponibilidade = "SELECT * FROM `tb_aulas` 
                                      
                                            WHERE tb_aulas.idSala = '{$idSala[0]}' AND (((tb_aulas.horarioInicio BETWEEN '{$horaInicio}' AND '{$horaFim}')
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