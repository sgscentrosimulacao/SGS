<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirInstituicao();

function inserirInstituicao(){

    $nomeInstituicao = $_POST['fieldNomeInstituicao'];

    $conn = abrirDatabase();

    $inserirInstituicao = "INSERT INTO tb_instituicao(nomeInstituicao) VALUES ('{$nomeInstituicao}')";


    if ($nomeInstituicao){
        if ($conn->query($inserirInstituicao)== true){
            echo '<SCRIPT>
                        confirm("Instituição cadastrada no sistema!");
                        window.location.href = "../view/cadastroInstituicao.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a instituição ao banco de dados!");
                        window.location.href = "../view/cadastroInstituicao.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("O campo não foi preenchido!");
                        window.location.href = "../view/cadastroInstituicao.php";
                      </SCRIPT>';
    }
}

?>