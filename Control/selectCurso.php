<?php
require "../Control/controleDoBanco.php";


$resultSelectCurso = consultarCurso();

function consultarCurso()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectCurso = "SELECT tb_cursos.idCurso,tb_cursos.nomeCurso, tb_instituicao.nomeInstituicao FROM tb_cursos 
                                  LEFT JOIN tb_instituicao ON tb_cursos.idInstituicao = tb_instituicao.idInstituicao
                                WHERE UPPER(tb_cursos.nomeCurso) LIKE '%{$pesquisa}%'";
                break;

            case 2:

                $selectCurso = "SELECT tb_cursos.idCurso,tb_cursos.nomeCurso, tb_instituicao.nomeInstituicao FROM tb_cursos 
                                  LEFT JOIN tb_instituicao ON tb_cursos.idInstituicao = tb_instituicao.idInstituicao
                                WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%'";
                break;

        }
    }else{
        $selectCurso = "SELECT tb_cursos.idCurso,tb_cursos.nomeCurso, tb_instituicao.nomeInstituicao FROM tb_cursos 
                                  LEFT JOIN tb_instituicao ON tb_cursos.idInstituicao = tb_instituicao.idInstituicao";
    }

    return mysqli_query($conn, $selectCurso);
}
?>