<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirItem();

function inserirItem(){

    $conn = abrirDatabase();

    $nomePeça = $_POST['fieldNomePeca'];
    $descricaoPeca = $_POST['fieldDescricaoPeca'];
    $quantidade = $_POST['fieldQuantidade'];

    $valorDropSala = $_POST['dropSala'];
    $selectIdSala = "SELECT tb_sala.idSala FROM tb_sala
                        	WHERE tb_sala.nomeSala = '{$valorDropSala}'";
    $sala = $conn->query($selectIdSala);

    $idSala = mysqli_fetch_row($sala);

    $inserirItem = "INSERT INTO tb_inventario(nomePeca, descricao, idSala, quantidade) VALUES ('{$nomePeça}','{$descricaoPeca}','{$idSala[0]}','{$quantidade}')";


    if ($nomePeça and $descricaoPeca and $quantidade){

        if ($conn->query($inserirItem)== true){
            echo '<SCRIPT>
                        confirm("Item cadastrado no sistema!");
                        window.location.href = "../view/cadastroItem.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar o item no banco de dados!");
                        window.location.href = "../view/cadastroItem.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../view/cadastroItem.php";
                      </SCRIPT>';
    }
}

?>