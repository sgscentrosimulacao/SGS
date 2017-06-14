<?php

require "controleDoBanco.php";
include "sessionControl.php";

inserirCurso();

function inserirCurso(){

    $nomeCurso = $_POST['fieldNomeCurso'];

    $conn = abrirDatabase();

    $inserirCurso = "INSERT INTO tb_cursos(nomeCurso) VALUES ('{$nomeCurso}')";


    if ($nomeCurso){
        if ($conn->query($inserirCurso)== true){
            echo '<SCRIPT>
                        confirm("Curso cadastrado no sistema!");
                        window.location.href = "../Vision/cadastroCurso.php";
                      </SCRIPT>';
        }else{
            echo '<SCRIPT>
                        confirm("Erro ao cadastrar o curso ao banco de dados!");
                        window.location.href = "../Vision/cadastroCurso.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("O campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroCurso.php";
                      </SCRIPT>';
    }
}

?>