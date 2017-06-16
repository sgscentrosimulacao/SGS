<?php
require "../Control/controleDoBanco.php";

$result = consultarUsuario();
$result2 = selecionarUsuarioId();


function consultarUsuario()
{
    $conn = abrirDatabase();
    if(isset($_POST['fieldPesquisar']) && $_POST['fieldPesquisar'] != null){


        $pesquisa = strtoupper ($_POST['fieldPesquisar']);
        $dropTipoPesquisa = $_POST['dropTipoPesquisa'];

        switch ($dropTipoPesquisa) {

            case 1:

                $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                                    
                                        WHERE UPPER(tb_usuario.nomeUsuario) LIKE '%{$pesquisa}%'";
                break;
            case 2:
                $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                                    
                                        WHERE UPPER(tb_usuario.usuario) LIKE '%{$pesquisa}%'";
                break;
            case 3:
                $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                                    
                                        WHERE UPPER(tb_usuario.email) LIKE '%{$pesquisa}%'";
                break;
            case 4:
                $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                                    
                                        WHERE UPPER(tb_conselho.nomeConselho) LIKE '%{$pesquisa}%'";
                break;
            case 5:
                $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                                    
                                        WHERE UPPER(tb_usuario.numeroConselho) LIKE '%{$pesquisa}%'";
                break;
            case 6:
                $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                                    
                                        WHERE UPPER(tb_instituicao.nomeInstituicao) LIKE '%{$pesquisa}%'";
                break;
        }
    }else{
        $selectUsuario = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario

                LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao";
    }
        $query = mysqli_query($conn, $selectUsuario);

    fecharDatabase($conn);

    return $query;
}

function selecionarUsuarioId(){

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $conn = abrirDatabase();
        $selectUsuarioId = "SELECT tb_usuario.idUsuario, tb_usuario.usuario, tb_usuario.nomeUsuario, tb_usuario.email, tb_conselho.nomeConselho, tb_usuario.numeroConselho, tb_instituicao.nomeInstituicao FROM tb_usuario
                        LEFT JOIN tb_conselho ON tb_usuario.idConselho = tb_conselho.idConselho 
                        LEFT JOIN tb_instituicao ON tb_usuario.idInstituicao = tb_instituicao.idInstituicao
                    
                          WHERE tb_usuario.idUsuario = {$id}";


        $queryIdUsuario = mysqli_query($conn, $selectUsuarioId);


        fecharDatabase($conn);
        return $queryIdUsuario;
    }
}

?>