<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirCurso();

function inserirCurso(){

    $conn = abrirDatabase();

    $nomeCurso = $_POST['fieldNomeCurso'];

    $valorDropInstituicao = $_POST['dropInstituicao'];
    $selectIdInstituicao = "SELECT tb_instituicao.idInstituicao FROM tb_instituicao
                        	  WHERE tb_instituicao.nomeInstituicao = '{$valorDropInstituicao}'";
    $instituicao = $conn->query($selectIdInstituicao);

    $idInstituicao = mysqli_fetch_row($instituicao);



    $inserirCurso = "INSERT INTO tb_cursos(nomeCurso, idInstituicao) VALUES ('{$nomeCurso}', '{$idInstituicao[0]}')";

    if ($nomeCurso){
        if ($conn->query($inserirCurso)== true){
            echo '<SCRIPT>
                        confirm("Curso cadastrado no sistema!");
                        window.location.href = "../view/cadastroCurso.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar o curso ao banco de dados!");
                        window.location.href = "../view/cadastroCurso.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("O campo não foi preenchido!");
                        window.location.href = "../view/cadastroCurso.php";
                      </SCRIPT>';
    }
}

?>