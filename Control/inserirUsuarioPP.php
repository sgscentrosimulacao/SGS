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
    $ciente = 1;
    $admin = $_POST['dropAdmin'];
    $aceito = 1;
    $dropConselho = $_POST['dropConselho'];
    $dropInstituicao = $_POST['dropInstituicao'];

    //Não inserir no banco. Só para verificação
    $cSenha = sha1($_POST['fieldCSenha']);

    $inserirUsuario = "INSERT INTO tb_usuario(usuario, senha, nomeUsuario, email, numeroConselho, idConselho, idInstituicao, estouCiente, administrador, aceito, image)    
        VALUES ('{$usuario}','{$senha}','{$nome}','{$email}','{$numeroConselho}','{$dropConselho}','{$dropInstituicao}','{$ciente}','{$admin}','{$aceito}', NULL)";


    if ($usuario and $senha and $cSenha and $nome and $email and $numeroConselho){
        if ($senha == $cSenha){
            if ($conn->query($inserirUsuario)==true){
                echo '<SCRIPT>
                        confirm("O usuário foi inserido no sistema!");
                        window.location.href = "../view/cadastroUsuarioPP.php";
                      </SCRIPT>';

            }else{
                echo '<SCRIPT>
                        confirm("O usuário não pode ser inserido!");
                        window.location.href = "../view/cadastroUsuarioPP.php";
                      </SCRIPT>';
            }
        }else{
            echo '<SCRIPT>
                        confirm("Senhas digitadas não são iguais!");
                        window.location.href = "../view/cadastroUsuarioPP.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../view/cadastroUsuarioPP.php";
                        
                      </SCRIPT>';
    }


    fecharDatabase($conn);
}
?>