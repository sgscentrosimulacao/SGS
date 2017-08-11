<?php

$resultItens = showItens();
$pegarSala = pegarSala();


function pegarSala(){

    $conn = abrirDatabase();

    $selectItem= "SELECT tb_sala.nomeSala FROM tb_inventario
	                  LEFT JOIN tb_sala ON tb_sala.idSala = tb_inventario.idSala
	                  
                    WHERE tb_inventario.idPeca = 4";

    $query = mysqli_query($conn, $selectItem);

    fecharDatabase($conn);

    return $query;


}

function showItens(){
    $conn = abrirDatabase();

    $selectItem= "SELECT * FROM tb_inventario WHERE idPeca = {$_GET['id']} ORDER BY tb_inventario.nomePeca ASC";

    $query = mysqli_query($conn, $selectItem);

    fecharDatabase($conn);

    return $query;
}

?>