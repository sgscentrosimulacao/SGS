<?php

include_once "controleDoBanco.php";
updateUsuario();

function updateUsuario(){

    $conn = abrirDatabase();
    //$id = $_POST['fieldIdUsuario'];
    $usuario = $_POST['fieldUsuario'];
    $nomeUsuario = $_POST['fieldNomeUsuario'];
    $email = $_POST['fieldEmail'];
    $dropConselho = $_POST['dropConselho'];
    $numeroConselho = $_POST['fieldNumeroConselho'];
    $dropInsituicao = $_POST['dropInstituicao'];


    $selectIdConselho = "SELECT tb_conselho.idConselho FROM tb_conselho
                            WHERE tb_conselho.nomeConselho = {$dropConselho};";

    $conselho = $conn->query($selectIdConselho);
    $idConselho = mysqli_fetch_row($conselho);


    $selectIdInstituicao = "SELECT tb_instituicao.idInstituicao FROM tb_instituicao
                            WHERE tb_instituicao.nomeInstituicao = {$dropInsituicao};";

    $instituicao = $conn->query($selectIdInstituicao);
    $idInstituicao = mysqli_fetch_row($instituicao);

    $updateUsuario = "UPDATE tb_usuario
                        SET usuario = {$usuario}, nomeUsuario= {$nomeUsuario}, email = {$email}, numeroConselho = {$numeroConselho}, idConselho = {$idConselho[0]}, idInstituicao = {$idInstituicao[0]}
                          WHERE idUsuario = {$id};";


    if ($conn->query($updateUsuario)==true){
        echo '<SCRIPT>
                        confirm("Usuário alterado no sistema!");
                        window.location.href = "../Vision/consultaUsuario.php";
                      </SCRIPT>';
    }else{
        echo '<SCRIPT>
                        confirm("Erro ao alterar o usuário no banco de dados!");
                        window.location.href = "../Vision/consultaUsuario.php";
                      </SCRIPT>';
    }

    fecharDatabase($conn);

}


?>