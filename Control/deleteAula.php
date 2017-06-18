<?php
include_once "controleDoBanco.php";

deleteAula();

function deleteAula(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteAula = "DELETE FROM tb_aulas WHERE idAula = {$id}";


    if ($conn->query($deleteAula)) {
        echo '<SCRIPT>
                            confirm("Aula excluída do sistema!");
                            window.location.href = "../Vision/consultaDisciplina.php";
                          </SCRIPT>';
    } else {
        echo '<SCRIPT>
                            confirm("Aula não pode ser excluída do banco!");
                            window.location.href = "../Vision/consultaDisciplina.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>