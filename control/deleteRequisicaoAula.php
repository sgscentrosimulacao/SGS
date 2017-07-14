<?php
include_once "controleDoBanco.php";

deleteAula();

function deleteAula(){

    $id = $_POST['rejeitarAula'];

    $conn = abrirDatabase();

    $deleteAula = "DELETE FROM tb_aulas WHERE idAula = {$id}";


    if ($conn->query($deleteAula)) {
            echo '<SCRIPT>
                            confirm("Requisição excluída do sistema!");
                            window.location.href = "../view/aulasSolicitadas.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("Requisição não pode ser excluída do banco!");
                            window.location.href = "../view/aulasSolicitadas.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>