<?php
require "../Control/controleDoBanco.php";

inserirUsuario();

function inserirUsuario(){

    $usuario = $_POST['fieldUser'];
    $senha = $_POST['fieldSenha'];
    $nome = $_POST['fieldNome'];
    $email = $_POST['fieldEmail'];
    $numeroConselho = $_POST['fieldNumeroCon'];
    $var = $_POST['dropProfissao'];
    $var2 = $_POST['dropInstituicao'];
    $telefone = $_POST['fieldTelefone'];
    //Não inserir no banco. Só para verificação
    $cSenha = $_POST['fieldCSenha'];

    switch ($var) {
            case "medico":
                $profissao = 1;
                break;
            case "enfermeiro":
                $profissao = 2;
                break;
            case "fisioterapeuta":
                $profissao = 3;
                break;
    }
    switch ($var2) {
        case "ufcspa":
            $instituicao = 1;
            break;
        case "santacasa":
            $instituicao = 2;
            break;
    }




        $conn = abrirDatabase();

    $inserirUsuario = "INSERT INTO tb_usuario(usuario, senha, nome, email, tipoConselho, instituicao, telefone, numeroConselho) 
        VALUES ('{$usuario}','{$senha}','{$nome}','{$email}','{$profissao}','{$instituicao}','{$telefone}','{$numeroConselho}')";





    if ($usuario and $senha and $cSenha and $nome and $email and $telefone and $numeroConselho){
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

