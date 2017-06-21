<?php
    include "../Control/sessionControl.php";
    include "../Control/selectUsuario.php";
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
    <title>SGS - Consulta Usuário</title>
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
    <div class="col-md-8 zeroPadding teste">
        <div>
            <form action="consultaUsuario.php" method="post">
                <fieldset id="consulta">
                    <legend id="labelsLogin">Consulta de Usuário</legend>

                    <div class="col-md-12">
                        <div class="editor-label col-md-4" id="tipoPesquisaLabel" style="">
                            <label for="tipoPesquisaLabel" id="labelsLogin">Pesquisar por</label>
                        </div>
                        <div class="dropdown col-md-8" style="">
                            <select class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="dropTipoPesquisa">
                                <option value="1">Nome Completo</option>
                                <option value="2">Usuário</option>
                                <option value="3">E-mail</option>
                                <option value="4">Conselho</option>
                                <option value="5">Nº Conselho</option>
                                <option value="6">Instituição</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <input class="form-control" id="fieldPesquisar" name="fieldPesquisar"
                                       placeholder="Insira sua consulta" style="width: 100%" type="text">
                            </div>
                            <div class="col-md-4">
                                <input id="cadastrar" type="submit" value="Pesquisar" name="submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div>

            <fieldset>
                <legend id="labelsLogin">Consulta</legend>
                <table class="table">
                    <tr>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">ID</th>
                        <th id="labelsLogin">Usuário</th>
                        <th id="labelsLogin">Nome</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">E-mail</th>
                        <th id="labelsLogin">Conselho</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">NºConselho</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Instituição</th>
                        <th id="labelsLogin" class="visible-lg visible-md visible-sm hidden-xs hidden-sm">Administrador</th>
                        <th></th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($resultSelectUsuario)) {
                        if ($row["administrador"] == 1){
                            $admin = "Sim";
                        } else{
                            $admin = "Não";
                        }
                        echo "<tr>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['idUsuario']}</td>
                                   <td>{$row['usuario']}</td>
                                   <td>{$row['nomeUsuario']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['email']}</td>
                                   <td>{$row['nomeConselho']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['numeroConselho']}</td>
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$row['nomeInstituicao']}</td>    
                                   <td class='visible-lg visible-md visible-sm hidden-xs hidden-sm'>{$admin}</td>    
                                   <td class=\"text-center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDados{$row['idUsuario']}'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                                   
                              </tr>
                              <div id=\"modalDados{$row['idUsuario']}\" class=\"modal fade\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                <h4 class=\"modal-title\" id='labelsLogin'>Dados do Usuário</h4>
                                            </div>
                                            
                                    <div class=\"modal-body\">
                                        
                                        <form action='../Control/updateUsuario.php' method='post'>
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin' style='padding-top: 20px;'>ID:</label>
                                                    <input class=\"form-control\" type='text' disabled value='{$row["idUsuario"]}' name='fieldIdUsuario'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>Usuário:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["usuario"]}' id='fieldUsuario' name='fieldUsuario'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>Nome Usuário:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeUsuario"]}' name='fieldNomeUsuario'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>E-mail:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["email"]}' name='fieldEmail'/>
                                            </div>    
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>Nome Conselho:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeConselho"]}' disabled name='fieldNomeConselho'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>Número Conselho:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["numeroConselho"]}' name='fieldNumeroConselho'/>
                                            </div>
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>Nome Instituição:</label>
                                                    <input class=\"form-control\" type='text' value='{$row["nomeInstituicao"]}' disabled name='fieldNomeInstituicao'/>
                                            </div> 
                                        
                                            <div class='col-md-12'>
                                                    <label id='labelsLogin'>Administrador:</label>
                                                    <label><input type=\"checkbox\" value=\"1\" name=\"fieldAdministrador\"></label>
                                            </div> 
                                        
                                        
                                            <div class=\"modal-footer\">
                                                <button type='submit' class='btn btn-success' name='alterar' value='{$row['idUsuario']}' style='margin-top: 30px;'>Alterar</button>
                                                </form>  
                                                <form action='../Control/deleteUsuario.php' method='post'>
                                                    <button class='btn btn-danger' name='excluir' value='{$row['idUsuario']}' style='margin-top: 30px;'>Excluir</button>
                                                </form>
                                                <button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;'>Cancelar</button>
                                            </div>             
                                      </div>
                                  </div>
                                </div>
                              </div>";
                    }
                    ?>
                </table>
            </fieldset>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>