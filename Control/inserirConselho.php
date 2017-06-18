<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirConselho();

function inserirConselho(){

    $nomeConselho = $_POST['fieldNomeConselho'];

    $conn = abrirDatabase();

    $inserirConselho = "INSERT INTO tb_conselho(nomeConselho) VALUES ('{$nomeConselho}')";


    if ($nomeConselho){
        if ($conn->query($inserirConselho) == true){
            echo '<SCRIPT>
                        confirm("Conselho cadastrado no sistema!");
                        window.location.href = "../Vision/cadastroConselho.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar o conselho ao banco de dados!");
                        window.location.href = "../Vision/cadastroConselho.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("O campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroConselho.php";
                      </SCRIPT>';
    }
}
?>