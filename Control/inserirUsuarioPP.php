<?php
require "../Control/controleDoBanco.php";

inserirUsuario();

function inserirUsuario(){

    $usuario = $_POST['fieldUser'];
    $senha = $_POST['fieldSenha'];
    $nome = $_POST['fieldNome'];
    $email = $_POST['fieldEmail'];
    $numeroConselho = $_POST['fieldNumeroCon'];
    $conselho = $_POST['dropConselho'];
    $instituicao = $_POST['dropInstituicao'];
    //Não inserir no banco. Só para verificação
    $cSenha = $_POST['fieldCSenha'];



    $conn = abrirDatabase();

    $inserirUsuario = "INSERT INTO tb_usuario(usuario, senha, nomeUsuario, email, numeroConselho, idConselho, idInstituicao) 
        VALUES ('{$usuario}','{$senha}','{$nome}','{$email}','{$numeroConselho}','{$conselho}','{$instituicao}')";





    if ($usuario and $senha and $cSenha and $nome and $email and $numeroConselho){
        if ($senha == $cSenha){
            if ($conn->query($inserirUsuario)==true){
                echo '<SCRIPT>
                        confirm("O usuário foi inserido no sistema!");
                        window.location.href = "../Vision/paginaPrincipalAdmin.php";
                      </SCRIPT>';
            }else{
                echo '<SCRIPT>
                        confirm("O usuário não pode ser inserido!");
                        window.location.href = "../Vision/cadastroUsuarioPP.php";
                      </SCRIPT>';
            }
        }else{
            echo '<SCRIPT>
                        confirm("Senhas digitadas não são iguais!");
                        window.location.href = "../Vision/cadastroUsuarioPP.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../Vision/cadastroUsuarioPP.php";
                        
                      </SCRIPT>';
    }


    fecharDatabase($conn);
}
?>