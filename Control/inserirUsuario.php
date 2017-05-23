<?php
require "../Control/controleDoBanco.php";

inserirUsuario();
function inserirUsuario(){

    $usuario = $_POST['fieldUser'];
    $senha = $_POST['fieldSenha'];
    $nome = $_POST['fieldNome'];
    $email = $_POST['fieldEmail'];
    $cpf = $_POST['fieldCpf'];
    $telefone = $_POST['fieldTelefone'];
    $numeroConselho = $_POST['fieldNumeroCon'];
    //Não inserir no banco. Só para verificação
    $cSenha = $_POST['fieldCSenha'];

    $conn = abrirDatabase();

    $inserirUsuario = "INSERT INTO tb_usuario(usuario, senha, nome, email, cpf, telefone, numeroConselho)
        VALUES ('{$usuario}','{$senha}','{$nome}','{$email}','{$cpf}','{$telefone}','{$numeroConselho}')";





    if ($usuario and $senha and $cSenha and $nome and $email and $cpf and $telefone and $numeroConselho){
        if ($senha == $cSenha){
            if ($conn->query($inserirUsuario)==true){
                header("Location: ../Vision/index.php");
            }else{
                echo '<SCRIPT>
                        confirm("O usuário não pode ser inserido!");
                        window.location.href = "../Vision/cadastro.php";
                      </SCRIPT>';
            }
        }else{
            echo '<SCRIPT>
                        confirm("Senhas digitadas não são iguais!");
                        window.location.href = "../Vision/cadastro.php";
                      </SCRIPT>';
        }
    }else{
        echo '<SCRIPT>
                        confirm("Algum campo não foi preenchido!");
                        window.location.href = "../Vision/cadastro.php";
                        
                      </SCRIPT>';
    }


    fecharDatabase($conn);
}
?>

