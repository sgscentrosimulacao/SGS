<?php
require "controleDoBanco.php";

inserirUsuario();

function inserirUsuario(){

    $conn = abrirDatabase();

    $usuario = $_POST['fieldUser'];
    $senha = sha1($_POST['fieldSenha']);
    $nome = $_POST['fieldNome'];
    $email = $_POST['fieldEmail'];
    $numeroConselho = $_POST['fieldNumeroCon'];
    $ciente = (isset($_POST['estouCiente']))?1:0;
    $dropConselho = $_POST['dropConselho'];
    $dropInstituicao = $_POST['dropInstituicao'];
    $admin = 0;
    $aceito = 0;

    //Não inserir no banco. Só para verificação
    $cSenha = sha1($_POST['fieldCSenha']);


    $inserirUsuario = "INSERT INTO tb_usuario(usuario, senha, nomeUsuario, email, numeroConselho, idConselho, idInstituicao, estouCiente, administrador, aceito, image)  
        VALUES ('{$usuario}','{$senha}','{$nome}','{$email}','{$numeroConselho}','{$dropConselho}','{$dropInstituicao}','{$ciente}','{$admin}','{$aceito}', NULL )";


    if ($usuario and $senha and $cSenha and $nome and $email and $numeroConselho){
        if ($ciente ==1){
            if ($senha == $cSenha){
                if ($conn->query($inserirUsuario)==true){
                    //header("Location: ../view/index.php");

                    echo '<SCRIPT>
                            confirm("O usuário foi inserido na fila de aprovação!");
                            window.location.href = "../view/index.php";
                          </SCRIPT>';

                }else{
                    echo '<SCRIPT>
                            confirm("O usuário não pode ser inserido no sistema!");
                            window.location.href = "../view/cadastroUsuario.php";
                          </SCRIPT>';
                }
            }else{
                echo '<SCRIPT>
                            confirm("Senhas digitadas não são iguais!");
                            window.location.href = "../view/cadastroUsuario.php";
                          </SCRIPT>';
            }
        }else{
            echo '<SCRIPT>
                            confirm("É necessário aceitar os termos de uso!");
                            window.location.href = "../view/cadastroUsuario.php";
                          </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../view/cadastroUsuario.php";
                        
                      </SCRIPT>';
    }


    fecharDatabase($conn);
}
?>

