<?php
require "../Control/controleDoBanco.php";


$selectCurso = consultarCurso();

function consultarCurso()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectCurso = "SELECT * FROM tb_cursos WHERE UPPER(tb_cursos.nomeCurso) LIKE '%{$pesquisa}%'";
                break;

        }
    }else{
        $selectCurso = "SELECT * FROM tb_cursos";
    }

    return mysqli_query($conn, $selectCurso);
}
?>