<?php
    include "../Control/showDrops.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style_index.css">
    <title>SGS - Cadastro</title>
</head>
<body>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header" id="navLogo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                    style="background-color: #447d8d;">
                <span class="icon-bar" style="background-color: #a0c7e7"></span>
                <span class="icon-bar" style="background-color: #a0c7e7"></span>
                <span class="icon-bar" style="background-color: #a0c7e7"></span>
            </button>

            <a class="navbar-brand zeroPadding" href="index.php"><img src="..\img\SGS_Logo.png" id="logoImg"></a>
            <div class="col-lg" id="divLogo"></div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="navbarLetras">
                <li class="inativo"><a href="index.php" id="navbarLetras">Página Inicial</a></li>
                <li class="active navbar-inverse ativo"><a href="cadastroUsuario.php" id="navbarLetras">Cadastrar</a></li>
                <li class="inativo"><a href="#" id="navbarLetras">Sobre</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="corpo">
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-3 sidenav zeroPadding">
            </div>
            <div class="col-sm-6 text-left" id="ColunaDoMeio">
                <form action="../Control/inserirUsuario.php" method="post">

                    <fieldset id="fieldsetPositionNone">
                        <legend><p id="labelsLogin">Cadastro</p></legend>
                        <div class="col-md-12">
                            <div class="editor-label col-md-2" id="userLabel">
                                <label for="userLabel" id="labelsLogin">Usuário</label>
                            </div>
                            <div class="editor-label form-inline" id="userLabel" style="padding-bottom:5px">
                                <input class="form-control" id="fieldUser" name="fieldUser" placeholder="Insira um usuário"
                                       style="width: 100%" type="text">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="editor-label col-md-2" id="senhaLabel">
                                <label for="senhaLabel" id="labelsLogin">Senha</label>
                            </div>
                            <div class="editor-label form-inline" id="senha" style="padding-bottom:5px">
                                <input class="form-control" id="fieldSenha" name="fieldSenha" placeholder="Insira uma senha"
                                       style="width:100%" type="password" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="editor-label col-md-6" id="cSenhaLabel">
                                <label for="cSenhaLabel" id="labelsLogin">Confirmar Senha</label>
                            </div>
                            <div class="editor-label form-inline" id="cSenha" style="padding-bottom:5px">
                                <input class="form-control" id="fieldCSenha" name="fieldCSenha" placeholder="Confirme sua senha"
                                       style="width:100%" type="password">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="editor-label col-md-4" id="nomeLabel">
                                <label for="nomeLabel" id="labelsLogin">Nome Completo</label>
                            </div>
                            <div class="editor-label form-inline" id="nomeLabel" style="padding-bottom:5px">
                                <input class="form-control" id="fieldNome" name="fieldNome" placeholder="Insira seu nome completo"
                                       style="width: 100%" type="text" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="editor-label col-md-2" id="emailLabel">
                                <label for="emailLabel" id="labelsLogin">E-mail</label>
                            </div>
                            <div class="editor-label form-inline" id="emailLabel" style="padding-bottom:5px">
                                <input class="form-control" id="fieldEmail" name="fieldEmail" placeholder="Digite seu e-mail"
                                       style="width: 100%" type="email" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6" style="padding-left: 0px;">
                                <div class="editor-label col-md-2" id="conLabel" style="">
                                    <label for="conLabel" id="labelsLogin">Conselho</label>
                                </div>
                                <div>
                                    <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropConselho">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resultConselho)) {
                                            echo "<option value=\"{$row['nomeConselho']}\">".$row['nomeConselho']."</option>";
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 0px;">
                                <div class="editor-label col-md-2" id="instituicaoLabel" style="padding-left: 0px">
                                    <label for="instituicaoLabel" id="labelsLogin">Instituição</label>
                                </div>
                                <div>
                                    <select class="form-control dropdown-toggle" type="button" data-toggle="dropdown" name="dropInstituicao">
                                        <?php
                                        while ($row2 = mysqli_fetch_assoc($resultInstituicao)) {
                                            echo "<option value=\"{$row2['nomeInstituicao']}\">".$row2['nomeInstituicao']."</option>";
                                        }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="editor-label col-md-6" id="numeroConLabel">
                                <label for="numeroConLabel" id="labelsLogin">Número do Conselho</label>
                            </div>
                            <div class="editor-label form-inline" id="numeroConLabel" style="padding-bottom:5px">
                                <input class="form-control" id="fieldNumeroCon" name="fieldNumeroCon" placeholder="Digite número do conselho"
                                       style="width: 100%" type="text" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group text-center col-md-12">
                                <label for="termosDeUsoLabel" id="labelsLogin">Termos de uso</label>
                            </div>
                            <div class="form-group" id="termosDeUsoLabel">
                        <textarea class="form-control disabled" rows="5" id="termosDeUsoLabel" style="width: 100%"
                                  placeholder="Para utilizar as salas no Centro de Simulação UFCSPA/ISCMPA, você deve estar ciente da necessidade de cumprimento de todas as regras descritas no Regimento Interno de uso do Centro de Simulação e seguir o fluxo do processo."
                                  name="fieldTermosDeUso" disabled></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <a class="btn btn-danger" href="../Regimento.pdf">Regimento</a>
                            </div>
                            <div class="col-md-10">
                                <p style="margin-left: 40%"><input type="checkbox" name="estouCiente" id="estouCiente"
                                                               value="1">Eu estou ciente e concordo com os termos de uso</p>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-left:30px">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">

                                <input id="cadastrar" type="submit" value="Enviar" name="submit" class="btn btn-success">

                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-sm-3 sidenav zeroPadding"></div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>