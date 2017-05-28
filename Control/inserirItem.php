<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirItem();

function inserirItem(){

    $nomePeça = $_POST['fieldNomePeca'];
    $descricaoPeca = $_POST['fieldDescricaoPeca'];
    $sala = $_POST['dropSala'];

    $conn = abrirDatabase();

    $inserirItem = "INSERT INTO tb_inventario(nomePeca, descricao, idSala) VALUES ('{$nomePeça}','{$descricaoPeca}','{$sala}')";


    if ($nomePeça and $descricaoPeca and $sala){

        if ($conn->query($inserirItem)== true){
            echo '<SCRIPT>
                        confirm("Item cadastrado no sistema!");
                        window.location.href = "../Vision/cadastroItem.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar o item no banco de dados!");
                        window.location.href = "../Vision/cadastroItem.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroItem.php";
                      </SCRIPT>';
    }
}

?>