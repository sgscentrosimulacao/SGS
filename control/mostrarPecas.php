<?php

include_once "controleDoBanco.php";

    $conn = abrirDatabase();

    $idSala = $_GET['dropSala'];


    $selectPeca = "SELECT tb_inventario.nomePeca, tb_inventario.idPeca, tb_inventario.idSala FROM tb_inventario
                        WHERE tb_inventario.idSala = '{$idSala}' ORDER BY tb_inventario.nomePeca ASC";

    $query = mysqli_query($conn, $selectPeca);
    $i = 0;
    $objItens = null;
    while ($assoc = mysqli_fetch_assoc($query)) {
        $objItens[$i]['nomePeca'] = $assoc['nomePeca'];
        $objItens[$i]['idPeca'] = $assoc['idPeca'];
        $i++;
    }

    fecharDatabase($conn);

    echo json_encode($objItens);

?>