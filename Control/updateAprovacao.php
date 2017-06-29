<?php

include_once "controleDoBanco.php";
include "funcoes.php";

updateAprovacao();

function updateAprovacao(){

    $conn = abrirDatabase();

    $id = $_POST['aprovarAula'];

    $aceita = 1;
    $updateAula = "UPDATE tb_aulas
                        SET tb_aulas.aceita = '{$aceita}'
                          WHERE idAula = '{$id}'";


    if ($conn->query($updateAula)==true){
        echo '<SCRIPT>
                    confirm("Aula aprovada no sistema!");
                    window.location.href = "../view/aulasSolicitadas.php";
                  </SCRIPT>';
    }else{
        echo '<SCRIPT>
                confirm("Erro ao aprovar a aula no banco de dados!");
                window.location.href = "../view/consultaDisciplina.php";
              </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>