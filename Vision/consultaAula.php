<?php
include "../Control/sessionControl.php";
include "../Control/selectDisciplina.php";
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
    <title>SGS - Consulta Disciplina</title>
</head>
<body>
<?php
include "navbar.php";
?>
    <div class="col-md-8 zeroPadding teste">
        <div>
            <div class="col-md-12" style="width: 100%;">
                <fieldset id="fieldsetPositionNone">
                    <legend id="labelsLogin">Consulta Aula</legend>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nome Aula</th>
                            <th>Descrição</th>
                            <th>Hora Inicio</th>
                            <th>Hora Fim</th>
                            <th>Data Inicio</th>
                            <th>Data Fim</th>
                            <th>Cenário</th>
                            <th>Disciplina</th>
                            <th>Curso</th>
                            <th class="text-center" >Editar</th>
                            <th class="text-center">Remover</th>

                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                               <td>".$row['idDisciplina']."</td>
                               <td>".$row['nomeDisciplina']."</td>
                               <td>".$row['descricao']."</td>
                               <td>".$row['visibilidade']."</td>
                               <td>".$row['qntAlunos']."</td>
                               <td>".$row['nomeCurso']."</td>
                               <td>".$row['nomeUsuario']."</td> 
                               <td class=\"text-center\"><i class=\"glyphicon glyphicon-pencil\"></i></td>
                               <td class=\"text-center\"><i class=\"glyphicon glyphicon-remove\"></i></td>
                        </tr>";
                        }?>
                    </table>
                </fieldset>
            </div>
        </div>

    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>
