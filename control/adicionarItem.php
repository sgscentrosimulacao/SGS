<?php

include_once "controleDoBanco.php";
include "funcoes.php";

adicionarItem();

function adicionarItem(){


    $conn = abrirDatabase();

    $dropItem = $_GET['dropItem'];
    $qnt = $_GET['qnt'];

    $dataInicio = converteDataToSQL($_GET['dataInicio']);
    $dataFim = converteDataToSQL($_GET['dataFim']);

    $horaInicio = $_GET['horaInicio'];
    $horaFim = $_GET['horaFim'];

    $disponibilidadeItem = "SELECT * FROM `tb_aulas` 
                                      LEFT JOIN tb_sala ON tb_aulas.idSala = tb_sala.idSala
                                      LEFT JOIN tb_inventario ON tb_sala.idSala = tb_inventario.idSala
                                      
                            WHERE tb_inventario.idPeca = {$dropItem} AND (((tb_aulas.horarioInicio BETWEEN '{$horaInicio}' AND '{$horaFim}')
                                   OR (tb_aulas.horarioFim BETWEEN '{$horaInicio}' AND '{$horaFim}'))
                                  AND ((tb_aulas.horarioInicio!= '{$horaFim}') AND (tb_aulas.horarioFim!= '{$horaInicio}')))
                                      
                                      AND
                                      
                                  ((tb_aulas.dataInicio BETWEEN '{$dataInicio}' AND '{$dataFim}')
                                  OR (tb_aulas.dataFim BETWEEN '{$dataInicio}' AND '{$dataFim}')) AND tb_aulas.aceita = 1";





}
?>