<?php

include_once "controleDoBanco.php";
include "sessionControl.php";

inserirDisciplina();


function inserirDisciplina(){

    $conn = abrirDatabase();

    $nomeDisci = $_POST['fieldNomeDisci'];
    $qntAlunos = $_POST['fieldQntAlunos'];
    $dropCurso = $_POST['dropCurso'];
    $visibilidade = (isset($_POST['fieldVisibilidade']))?1:0;

    $descricao = $_POST['fieldDescricaoDisci'];

    $idUsuario = $_SESSION['idUsuario'];
    $idConselho = $_SESSION['idConselho'];
    $idInstituicao = $_SESSION['idInstituicao'];


    $uploaddir = $_SERVER['DOCUMENT_ROOT']."/SGS/SGS/planosDeEnsino/";

    $nomeDisciArquivo = str_replace(" ", "_", $_POST['fieldNomeDisci']);

    $nomeArquivo = "PE_IdUser".$_SESSION['idUsuario']."_".$nomeDisciArquivo.".pdf";

    $nome = basename($_FILES['userfile']['name']);

    $uploadfile = $uploaddir . basename(date("YmdHis").".pdf");

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        //echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        //echo "Possível ataque de upload de arquivo!\n";
    }

    $inserirDisciplina = "INSERT INTO tb_disciplina(nomeDisciplina, descricao, visibilidade, qntAlunos, idCurso, idUsuario, idConselho, idInstituicao, planoDeEnsino, caminhoPlano)   
                                            VALUES('{$nomeDisci}','{$descricao}','{$visibilidade}','{$qntAlunos}','{$dropCurso}','{$idUsuario}',
                                                                            '{$idConselho}','{$idInstituicao}', '{$nome}','{$uploadfile}')";

    if ($nomeDisci and $qntAlunos and $descricao){
        if ($conn->query($inserirDisciplina)==true){
            echo '<SCRIPT>
                        confirm("Disciplina cadastrada no sistema!");
                        window.location.href = "../view/cadastroDisciplina.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a disciplina no banco de dados!");
                        window.location.href = "../view/cadastroDisciplina.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../view/cadastroDisciplina.php";
                      </SCRIPT>';
    }
}
?>