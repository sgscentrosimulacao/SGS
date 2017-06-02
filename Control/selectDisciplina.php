<?php
require "../Control/controleDoBanco.php";

$result = consultarDisciplina();
$resutl2 = consultarAulas();
function consultarDisciplina()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_disciplina.nomeDisciplina) LIKE '%{$pesquisa}%'";
                break;
            case 2:
                 $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_cursos.nomeCurso) LIKE '%{$pesquisa}%'";

                break;
            case 3:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%'";
                break;
            case 4:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_usuario.nomeUsuario) LIKE '%{$pesquisa}%'";
                break;
            case 5:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_usuario.numeroConselho) LIKE '%{$pesquisa}%'";
                break;
            case 6:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%'";
                break;
        }
    }else{
        $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario";
    }

    return mysqli_query($conn, $selectUsuario);
}


function consultarAulas(){

    if(isset($_GET['id'])){
    $idSelecionado = $_GET['id'];

    $selectAulas = "SELECT tb_aulas.idAula,tb_aulas.nomeAula,tb_aulas.descricaoAula,tb_aulas.horarioInicio,tb_aulas.horarioFim,tb_aulas.dataInicio,tb_aulas.dataFim,tb_aulas.cenario,tb_cursos.nomeCurso FROM tb_aulas
	                    LEFT JOIN tb_cursos ON tb_aulas.idCurso = tb_cursos.idCurso
                        WHERE tb_aulas.idDisciplina = '{$idSelecionado}'";

    $conn = abrirDatabase();


    return mysqli_query($conn, $selectAulas);
    }else{

    }


}
?>