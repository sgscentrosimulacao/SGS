<?php
    include "../Control/sessionControl.php";
    include "../Control/showDrops.php";
    $itemSelecionado = basename(__FILE__, '.php');
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
    <title>SGS - Cadastro Usuário</title>
</head>
<body>
<?php
if ($_SESSION['administrador'] == 1){
    include "navbarAdmin.php"; //NAV BAR
    include "navMenuAdmin.php"; //NAV MENU
    echo "<div>";
    include "menuAdmin.php";   //MENU
}else{
    include "navbarUser.php"; //NAV BAR
    include "navMenuUser.php"; //MENU
    echo "<div>";
    include "menuUser.php"; //NAV MENU
}
?>
    <div class="col-md-8">
        <div class="col-md-12">
            <form action="./../Control/inserirUsuarioPP.php" method="post">
                <fieldset id="fieldsetPositionNone">
                    <legend><p id="labelsLogin">Cadastrar Usuário</p></legend>

                    <div class="col-md-12 text-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6 zeroPadding">
                            <div class="editor-label col-md-2" id="userLabel">
                                <label for="userLabel" id="labelsLogin">Usuário</label>
                            </div>
                            <div class="editor-label form-inline" id="userLabel" style="padding-bottom:5px">
                                <input class="form-control" id="fieldUser" name="fieldUser" placeholder="Insira um usuário"
                                       style="width: 100%" type="text">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0px;">
                            <div class="editor-label col-md-12" id="conLabel" style="">
                                <label for="conLabel" id="labelsLogin">Tipo Usuário</label>
                            </div>
                            <select class="form-control dropdown-toggle col-md-12" type="button" data-toggle="dropdown" name="dropAdmin">
                                <option value="1">Administrador</option>
                                <option value="0">Utilizador</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6" style="padding-left: 0px;">
                            <div class="editor-label col-md-2" id="senhaLabel">
                                <label for="senhaLabel" id="labelsLogin">Senha</label>
                            </div>
                            <div class="editor-label form-inline" id="senha" style="padding-bottom:5px">
                                <input class="form-control" id="fieldSenha" name="fieldSenha" placeholder="Insira uma senha"
                                       style="width:100%" type="password" >
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0px;">
                            <div class="editor-label col-md-6" id="cSenhaLabel">
                                <label for="cSenhaLabel" id="labelsLogin">Confirmar Senha</label>
                            </div>
                            <div class="editor-label form-inline" id="cSenha" style="padding-bottom:5px">
                                <input class="form-control" id="fieldCSenha" name="fieldCSenha" placeholder="Confirme sua senha"
                                       style="width:100%" type="password">
                            </div>
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
                        <div class="editor-label col-md-12" id="emailLabel">
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
                        <div class="editor-label col-md-3" id="numeroConLabel">
                            <label for="numeroConLabel" id="labelsLogin">Número do Conselho</label>
                        </div>
                        <div class="editor-label form-inline" id="numeroConLabel" style="padding-bottom:5px">
                            <input class="form-control" id="fieldNumeroCon" name="fieldNumeroCon" placeholder="Digite número do conselho"
                                   style="width: 100%" type="text" >
                    </div>

                        <div class="col-md-12 text-center" >
                            <div class="col-md-4 zeroPadding">
                            </div>
                            <div class="col-md-4 zeroPadding">

                                <input id="cadastrar" type="submit" value="Enviar" name="submit" class="btn btn-success">

                            </div>
                            <div class="col-md-4 zeroPadding">

                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>