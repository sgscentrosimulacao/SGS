<?php
    include "../Control/selectUsuario.php";
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
<?php

    while ($row = mysqli_fetch_assoc($result2)){
    echo "
        <body>
            <fieldset id='fieldsetPositionNone'>
                <div class='col-md-12'>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>ID:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["idUsuario"]."</label>
                    </div>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>Usuário:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["usuario"]."</label>
                    </div>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>Nome:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["nomeUsuario"]."</label>
                    </div>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>E-mail:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["email"]."</label>
                    </div>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>Conselho:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["nomeConselho"]."</label>
                    </div>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>Número Conselho:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["numeroConselho"]."</label>
                    </div>
                    <div class='editor-label col-md-4' id='tipoPesquisaLabel'>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>Instituição:</label>
                        <label for='tipoPesquisaLabel' id='labelsLogin'>".$row["nomeInstituicao"]."</label>
                    </div>
                </div>
            </fieldset>
        </div>
        </body>";
    }
?>
</html>