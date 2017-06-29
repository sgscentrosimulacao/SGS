<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirSala();

function inserirSala(){

    $nomeSala = $_POST['fieldNomeSala'];
    $descricaoSala = $_POST['fieldDescricaoSala'];

    $conn = abrirDatabase();

    $inserirSala = "INSERT INTO tb_sala(nomeSala, descricaoSala) VALUES ('{$nomeSala}','{$descricaoSala}')";


    if ($nomeSala and $descricaoSala){

        if ($conn->query($inserirSala)== true){
            echo '<SCRIPT>
                        confirm("Sala cadastrada no sistema!");
                        window.location.href = "../view/cadastroSala.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a sala no banco de dados!");
                        window.location.href = "../view/cadastroSala.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../view/cadastroSala.php";
                      </SCRIPT>';
    }
}
?>