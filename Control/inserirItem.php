<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirItem();

function inserirItem()
{

    $conn = abrirDatabase();

    $nomePeça = $_POST['fieldNomePeca'];
    $descricaoPeca = $_POST['fieldDescricaoPeca'];
    $quantidade = $_POST['fieldQuantidade'];
    $dropSala = $_POST['dropSala'];

    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . "/SGS/img/itemPics/";

    $uploadfile = $uploaddir . basename(date("YmdHis") . ".jpg");
    $nomeArquivo = basename(date("YmdHis") . ".jpg");

    if (!file_exists($_FILES['userfile']['tmp_name']) || !is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        $inserirItem = "INSERT INTO tb_inventario(nomePeca, descricao, idSala, quantidade, image) VALUES ('{$nomePeça}','{$descricaoPeca}','{$dropSala}','{$quantidade}', NULL )";

    } else {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            $inserirItem = "INSERT INTO tb_inventario(nomePeca, descricao, idSala, quantidade, image) VALUES ('{$nomePeça}','{$descricaoPeca}','{$dropSala}','{$quantidade}', '{$nomeArquivo}')";

        }
    }

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