<?php
require "../Control/controleDoBanco.php";

inserirUsuario();

function inserirUsuario(){

    $conn = abrirDatabase();

    $usuario = $_POST['fieldUser'];
    $senha = sha1($_POST['fieldSenha']);
    $nome = $_POST['fieldNome'];
    $email = $_POST['fieldEmail'];
    $numeroConselho = $_POST['fieldNumeroCon'];
    $ciente = (isset($_POST['estouCiente']))?1:0;
    $admin = 0;

    $valorDropCurso = $_POST['dropConselho'];
    $selectIdConselho = "SELECT tb_conselho.idConselho FROM tb_conselho
                        	WHERE tb_conselho.nomeConselho = '{$valorDropCurso}'";
    $conselho = $conn->query($selectIdConselho);

    $idConselho = mysqli_fetch_row($conselho);


    $valorDropInstituicao = $_POST['dropInstituicao'];
    $selectIdInstituicao = "SELECT tb_instituicao.idInstituicao FROM tb_instituicao
                        	  WHERE tb_instituicao.nomeInstituicao = '{$valorDropInstituicao}'";
    $instituicao = $conn->query($selectIdInstituicao);

    $idInstituicao = mysqli_fetch_row($instituicao);


    //Não inserir no banco. Só para verificação
    $cSenha = sha1($_POST['fieldCSenha']);


    $inserirUsuario = "INSERT INTO tb_usuario(usuario, senha, nomeUsuario, email, numeroConselho, idConselho, idInstituicao, estouCiente, administrador) 
        VALUES ('{$usuario}','{$senha}','{$nome}','{$email}','{$numeroConselho}','{$idConselho[0]}','{$idInstituicao[0]}','{$ciente}','{$admin}')";





    if ($usuario and $senha and $cSenha and $nome and $email and $numeroConselho){
        if ($ciente ==1){
            if ($senha == $cSenha){
                if ($conn->query($inserirUsuario)==true){
                    //header("Location: ../Vision/index.php");

                    echo '<SCRIPT>
                            confirm("O usuário foi inserido no sistema!");
                            window.location.href = "../Vision/index.php";
                          </SCRIPT>';

                }else{
                    echo '<SCRIPT>
                            confirm("O usuário não pode ser inserido no sistema!");
                            window.location.href = "../Vision/cadastroUsuario.php";
                          </SCRIPT>';
                }
            }else{
                echo '<SCRIPT>
                            confirm("Senhas digitadas não são iguais!");
                            window.location.href = "../Vision/cadastroUsuario.php";
                          </SCRIPT>';
            }
        }else{
            echo     '<SCRIPT>
                            confirm("É necessário aceitar os termos de uso!");
                            window.location.href = "../Vision/cadastroUsuario.php";
                          </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroUsuario.php";
                        
                      </SCRIPT>';
    }


    fecharDatabase($conn);
}
?>

