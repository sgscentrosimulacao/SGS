<?php
include_once "controleDoBanco.php";

deleteAula();

function deleteAula(){

    $id = $_POST['excluir'];

    $conn = abrirDatabase();

    $deleteAula = "DELETE FROM tb_aulas WHERE idAula = {$id}";


    if ($conn->query($deleteAula)) {
        if ($tela = $_GET['tela'] == "disciplina") {
            echo '<SCRIPT>
                            confirm("Aula excluída do sistema!");
                            window.location.href = "../view/consultaDisciplina.php";
                          </SCRIPT>';
        }else{
            echo '<SCRIPT>
                            confirm("Aula excluída do sistema!");
                            window.location.href = "../view/calendario.php";
                          </SCRIPT>';
        }
    } else {
        echo '<SCRIPT>
                            confirm("Aula não pode ser excluída do banco!");
                            window.location.href = "../view/consultaDisciplina.php";
                          </SCRIPT>';
    }

    fecharDatabase($conn);

}
?>