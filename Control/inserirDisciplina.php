<?php

include_once "../Control/controleDoBanco.php";
include "sessionControl.php";

inserirDisciplina();


function inserirDisciplina(){

    $conn = abrirDatabase();



    $nomeDisci = $_POST['fieldNomeDisci'];
    $qntAlunos = $_POST['fieldQntAlunos'];

    $valorDropCurso = $_POST['dropCurso'];
    $selectIdCurso = "SELECT tb_cursos.idCurso FROM tb_cursos
                        	WHERE tb_cursos.nomeCurso = '{$valorDropCurso}'";
    $curso = $conn->query($selectIdCurso);

    $idCurso = mysqli_fetch_row($curso);

    $visibilidade = (isset($_POST['fieldVisibilidade']))?1:0;

    $descricao = $_POST['fieldDescricaoDisci'];

    $idUsuario = $_SESSION['idUsuario'];
    $idConselho = $_SESSION['idConselho'];
    $idInstituicao = $_SESSION['idInstituicao'];


    $uploaddir = $_SERVER['DOCUMENT_ROOT']."/SGS/SGS/planosDeEnsino/" ;

    $nomeArquivo = "PE_".$_SESSION['idUsuario']."_".$_POST['fieldNomeDisci'];
    $uploadfile = $uploaddir . basename($nomeArquivo);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }

    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);
    print "</pre>";



    $inserirDisciplina = "INSERT INTO tb_disciplina(nomeDisciplina, descricao, visibilidade, qntAlunos, idCurso, idUsuario, idConselho, idInstituicao) 
                            VALUES('{$nomeDisci}','{$descricao}','{$visibilidade}','{$qntAlunos}','{$idCurso[0]}','{$idUsuario}',
                                                                            '{$idConselho}','{$idInstituicao}')";

    if ($nomeDisci and $qntAlunos and $descricao){
        if ($conn->query($inserirDisciplina)==true){
            echo '<SCRIPT>
                        confirm("Disciplina cadastrada no sistema!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar a disciplina no banco de dados!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroDisciplina.php";
                      </SCRIPT>';
    }
}
?>