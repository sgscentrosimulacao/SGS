<?php
include "../control/sessionControl.php";
$itemSelecionado = basename(__FILE__, '.php');
include "../control/selectUsuario.php";
include "../control/funcoes.php";

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
    <title>SGS - Solicitações</title>
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
<div class="col-md-8 zeroPadding">
    <div class="col-md-12">
        <fieldset id="fieldsetPositionNone">
            <legend class="ajusteTitulos" style="width: 220px" id="labelsLogin"> Usuários Solicitados</legend>

            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-condensed" style="border-collapse:collapse;">

                        <thead>
                        <tr>
                            <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Usuário</th>
                            <th id="labelsLogin">Nome Usuário</th>
                            <th id="labelsLogin" >E-mail</th>
                            <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Nome Conselho</th>
                            <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Nº Conselho</th>
                            <th id="labelsLogin">Nome Instituição</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($resultSelectUsuarioNAprovado)) {
                            echo "<tr data-toggle=\"collapse\" data-target=\"#{$row['idUsuario']}\" class=\"accordion-toggle panel panel-primary\">
                                    
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['usuario']}</td>
                                    <td>{$row['nomeUsuario']}</td>
                                    <td>{$row['email']}</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['nomeConselho']}</td>
                                    <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['numeroConselho']}</td>
                                    <td>{$row['nomeInstituicao']}</td>
                                    <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosAula{$row['idUsuario']}'><i class=\"glyphicon glyphicon-list\"></i></button></td>
                                </tr>
                                <tr>
                                    <td colspan=\"12\" class=\"hiddenRow\"><div class=\"accordian-body collapse\" id=\"{$row['idUsuario']}\">
                                        <table class=\"table table-striped\">
                                            <tr>
                                                <div>
                                                    <div class='col-md-12 form-control'>
                                                        <label id='labelsLogin'>Nome do Usuário:</label>
                                                        <label>{$row['nomeUsuario']}</label></h2>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Usuário:</label>
                                                        <label>{$row['usuario']}</label>
                                                    </div>
                                                
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>E-mail:</label>
                                                        <label>{$row['email']}</label>
                                                    </div>
                                                    
                                                    
                
                                                </div>
                                                
                                                <div>
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Nome Conselho:</label>
                                                        <label>{$row["nomeConselho"]}</label>
                                                    </div>
                                                    
                                                    <div class='col-md-6'>
                                                        <label id='labelsLogin'>Nº Conselho</label>
                                                        <label>{$row["numeroConselho"]}</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class='col-md-4'>
                                                        <label id='labelsLogin'>Instituição: </label>
                                                        <label>{$row["nomeInstituicao"]}</label>
                                                    </div>
                                                </div>
                                                    
                                                <div class='col-md-12'>
                                                    <div class='col-md-1'></div>
                                                    <div class='col-md-5 text-right'>
                                                        <form action='../control/updateAprovacaoUser.php' method='post'>
                                                            <button class='btn btn-danger' name='rejeitarUsuario' value='{$row['idUsuario']}' style='margin-top: 30px;'><i class='glyphicon glyphicon-remove' title='Rejeitar aula'> Rejeitar</i></button>
                                                        </form>
                                                    </div>
                                                    <div class='col-md-5 text-left'>
                                                        <form action='../control/updateAprovacaoUser.php' method='post'>
                                                            <button class='btn btn-success' name='aprovarUsuario' value='{$row['idUsuario']}' style='margin-top: 30px;'><i class='glyphicon glyphicon-ok' title='Aprovar aula'> Aprovar</i></button>
                                                        </form>
                                                    </div>
                                                    <div class='col-md-1'></div>
                                                </div>
                                            </tr>
                                          </div>
                                        </table>
                                    </td>
                                </tr>
                               ";}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<?php
include "footer.php";
?>
</body>
</html>