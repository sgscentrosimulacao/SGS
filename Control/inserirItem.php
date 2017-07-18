<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirItem();

function inserirItem(){

    $conn = abrirDatabase();

    $nomePeça = $_POST['fieldNomePeca'];
    $descricaoPeca = $_POST['fieldDescricaoPeca'];
    $quantidade = $_POST['fieldQuantidade'];
    $dropSala = $_POST['dropSala'];

    $inserirItem = "INSERT INTO tb_inventario(nomePeca, descricao, idSala, quantidade) VALUES ('{$nomePeça}','{$descricaoPeca}','{$dropSala}','{$quantidade}')";


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