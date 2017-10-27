<?php
include_once "controleDoBanco.php";

//Página Consulta Disciplina --------------------------------------------
$resultSelectDisciplina = consultarDisciplina();
$resultSelectAulasIdDisciplina = consultarAulasIdDisciplina();
//-----------------------------------------------------------------------

//Página Calendário -----------------------------------------------------
$resultSelectTodasAulasDataAprovadas = consultarAulasAprovadasData();
//-----------------------------------------------------------------------

//Nav Bar Requisições ---------------------------------------------------
$resultSelectAulasNAprovadas = consultarAulasNAprovadas();
//-----------------------------------------------------------------------



function consultarDisciplina()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_disciplina.nomeDisciplina) LIKE '%{$pesquisa}%' AND (tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}')";
                break;
            case 2:
                 $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_cursos.nomeCurso) LIKE '%{$pesquisa}%' AND (tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}')";

                break;
            case 3:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%' AND (tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}')";
                break;
            case 4:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_usuario.nomeUsuario) LIKE '%{$pesquisa}%' AND (tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}')";
                break;
            case 5:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_usuario.numeroConselho) LIKE '%{$pesquisa}%' AND (tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}')";
                break;
            case 6:
                $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                          
                                         WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%' AND (tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}')";
                break;
        }
    }else{
        $selectUsuario = "SELECT tb_disciplina.idDisciplina,tb_disciplina.nomeDisciplina,tb_disciplina.descricao,tb_disciplina.visibilidade,tb_disciplina.qntAlunos, tb_cursos.nomeCurso, tb_usuario.nomeUsuario, tb_disciplina.planoDeEnsino, tb_disciplina.caminhoPlano FROM tb_disciplina 
                                        LEFT JOIN tb_cursos ON tb_disciplina.idCurso = tb_cursos.idCurso
                                        LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
                                        WHERE tb_disciplina.visibilidade = 1 OR tb_disciplina.idUsuario = '{$_SESSION['idUsuario']}'";
    }

    return mysqli_query($conn, $selectUsuario);
}


function consultarAulasIdDisciplina(){

    if(isset($_GET['id'])){
    $idSelecionado = $_GET['id'];

    $selectAulas = "SELECT tb_aulas.idAula,tb_aulas.nomeAula,tb_aulas.descricaoAula,tb_aulas.horarioInicio,tb_aulas.horarioFim,tb_aulas.dataInicio,tb_aulas.dataFim,tb_aulas.cenario,tb_cursos.nomeCurso, tb_aulas.aceita FROM tb_aulas
	                    LEFT JOIN tb_cursos ON tb_aulas.idCurso = tb_cursos.idCurso
                        WHERE tb_aulas.idDisciplina = '{$idSelecionado}' AND tb_aulas.aceita = 1";

    $conn = abrirDatabase();


    return mysqli_query($conn, $selectAulas);
    }else{

    }
}


function consultarAulasNAprovadas(){

        $selectAulas = "SELECT tb_aulas.idAula,tb_aulas.nomeAula,tb_aulas.descricaoAula,tb_aulas.horarioInicio,tb_aulas.horarioFim,tb_aulas.dataInicio,tb_aulas.dataFim,tb_aulas.cenario,tb_cursos.nomeCurso, tb_usuario.nomeUsuario,tb_sala.nomeSala, tb_aulas.aceita FROM tb_aulas
	                    LEFT JOIN tb_cursos ON tb_aulas.idCurso = tb_cursos.idCurso
	                    LEFT JOIN tb_disciplina ON tb_aulas.idDisciplina = tb_disciplina.idDisciplina
	                    LEFT JOIN tb_usuario ON tb_disciplina.idUsuario = tb_usuario.idUsuario
	                    LEFT JOIN tb_sala ON tb_aulas.idSala = tb_sala.idSala
	                    
	                    WHERE tb_aulas.aceita = 0";

        $conn = abrirDatabase();

    return mysqli_query($conn, $selectAulas);
}


function consultarAulasData(){

    if(isset($_GET['id'])){

        $dataSelecionada = $_GET['id'];

        $selectAulas = "SELECT tb_aulas.idAula, tb_aulas.nomeAula, tb_aulas.dataInicio, tb_aulas.dataFim, 
                                tb_aulas.horarioInicio, tb_aulas.horarioFim, tb_aulas.cenario, tb_aulas.descricaoAula, tb_disciplina.nomeDisciplina,
                                 tb_cursos.nomeCurso, tb_sala.nomeSala, tb_aulas.aceita FROM tb_aulas 

                            LEFT JOIN tb_cursos ON tb_aulas.idCurso = tb_cursos.idCurso
                            LEFT JOIN tb_sala ON tb_aulas.idSala = tb_sala.idSala
                            LEFT JOIN tb_disciplina ON tb_aulas.idDisciplina = tb_disciplina.idDisciplina

		                      WHERE tb_aulas.dataInicio = '{$dataSelecionada}'";

        $conn = abrirDatabase();

        return mysqli_query($conn, $selectAulas);
    }else{

    }
}

function consultarAulasAprovadasData(){

    if(isset($_GET['id'])){

        $conn = abrirDatabase();

        $dataSelecionada = $_GET['id'];

        $selectAulas = "SELECT tb_aulas.idAula, tb_aulas.nomeAula, tb_aulas.dataInicio, tb_aulas.dataFim, 
                                tb_aulas.horarioInicio, tb_aulas.horarioFim, tb_aulas.cenario, tb_aulas.descricaoAula, tb_disciplina.nomeDisciplina,
                                 tb_cursos.nomeCurso, tb_sala.nomeSala FROM tb_aulas 

                            LEFT JOIN tb_cursos ON tb_aulas.idCurso = tb_cursos.idCurso
                            LEFT JOIN tb_sala ON tb_aulas.idSala = tb_sala.idSala
                            LEFT JOIN tb_disciplina ON tb_aulas.idDisciplina = tb_disciplina.idDisciplina

		                      WHERE tb_aulas.dataInicio = '{$dataSelecionada}' AND tb_aulas.aceita = 1";


        $query = mysqli_query($conn, $selectAulas);

        return $query;
    }else{

    }
}

?>