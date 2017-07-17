<?php

include_once "controleDoBanco.php";
include "funcoes.php";

adicionarItem();

function adicionarItem(){


    $conn = abrirDatabase();

    $dropItem = $_GET['dropItem'];
    $dropSala = $_GET['dropSala'];
    $qnt = $_GET['qnt'];

    $disponibilidadeItem = "SELECT * FROM tb_aulas";



}
?>