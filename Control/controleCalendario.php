<?php
    include_once "conexaoCalendario.php";
    include_once "funcoes.php";
    include_once "selectDisciplina.php";



    function num($num){
        return ($num < 10) ? '0'.$num : $num;
    }
    function montaEventos($info){
        global $pdo;
        //tabela, data, titulo
        $tabela = $info['tabela'];
        $data = $info['data'];
        $titulo = $info['titulo'];
        $eventos = $pdo->prepare("SELECT * FROM tb_aulas WHERE `".$data."` >= NOW()");
        $eventos->execute();
        $retorno = array();
        while($row = $eventos->fetchObject()){
            $dataArr = date('Y-m-d', strtotime($row->{$data}));
            $retorno[$dataArr] = array(
                'titulo' => $row->{$titulo}
            );
        }
        return $retorno;
    }
    function diasMeses(){
        $retorno = array();
        for($i = 1; $i<=12;$i++){
            $retorno[$i] = cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
        }
        return $retorno;
    }
    function montaCalendario($eventos = array()){
        $daysWeek = array(
            'Sun',
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat'
        );
        $diasSemana = array(
            'Dom',
            'Seg',
            'Ter',
            'Qua',
            'Qui',
            'Sex',
            'Sab'
        );
        $arrayMes = array(
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro'
        );
        $diasMeses = diasMeses();
        $arrayRetorno = array();
        for($i =1; $i <= 12; $i++){
            $arrayRetorno[$i] = array();
            for($n=1; $n<= $diasMeses[$i]; $n++){
                $dayMonth = gregoriantojd($i, $n, date('Y'));
                $weekMonth = substr(jddayofweek($dayMonth, 1),0,3);
                if($weekMonth == 'Mun') $weekMonth = 'Mon';
                $arrayRetorno[$i][$n] = $weekMonth;
            }
        }
        echo '<a class="btn" href="#" id="volta">&laquo;</a><a class="btn" href="#" id="vai">&raquo;</a>';
        echo '<table class="table table-hover">';
        foreach($arrayMes as $num => $mes){
            echo '<tbody id="mes_'.$num.'" class="mes">';
            echo '<tr class="mes_title text-center"><td colspan="7"><span class="label text-center tituloCalendario">'.$mes.'</span></td></tr>';
            echo '<tr class="dias_title">';
            foreach($diasSemana as $i => $day){
                echo '<td>'.$day.'</td>';
            }
            echo '</tr><tr>';
            $y = 0;
            foreach($arrayRetorno[$num] as $numero => $dia){
                $y++;

                if($numero == 1){
                    $qtd = array_search($dia, $daysWeek);
                    for($i=1; $i<=$qtd; $i++){
                        echo '<td></td>';
                        $y+=1;
                    }
                }
                if(count($eventos) > 0){
                    $month = num($num);
                    $dayNow = num($numero);
                    $date = date('Y').'-'.$month.'-'.$dayNow;
                    if(in_array($date, array_keys($eventos))){
                        $evento = $eventos[$date];
                        echo '<td class="evento"><a href="?id='.'2017'.'-'.$month.'-'.$numero.'" title="'.$evento['titulo'].'">'.$numero.'</a></td>';
                    }else{
                        echo '<td class="dia_'.$numero.'">'.$numero.'</td>';
                    }

                }else{
                    echo '<td class="dia_'.$numero.'">'.$numero.'</td>';
                }
                if($y == 7){
                    $y=0;
                    echo '</tr><tr>';
                }
            }
            echo '</tr></tbody>';
        }
        echo '</table>';


    }

    function mostraAulas(){



        if(isset($_GET['id'])){
            echo "
            <fieldset id='fieldsetPositionNone'>
                <legend id=\"labelsLogin\">Aulas</legend>
                <table class=\"table\">
                    <tr>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">ID</th>
                        <th id=\"labelsLogin\">Nome Aula</th>
                        <th id=\"labelsLogin\">Data Inicio</th>
                        <th id=\"labelsLogin\">Data Fim</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Hora Inicio</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Hora Fim</th>
                        <th id=\"labelsLogin\">Nome Disciplina</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Curso</th>
                        <th id=\"labelsLogin\" class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">Sala</th>
                    </tr>";



                while ($row = mysqli_fetch_assoc($resultSelectAulasData)) {
                   echo " <tr>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['idAula']}</td>
                           <td>{$row['nomeAula']}</td>
                           <td>".converteDataFromSQL($row['dataInicio'])."</td>
                           <td>".converteDataFromSQL($row['dataFim'])."</td>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['horarioInicio']}</td>
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['horarioFim']}</td>
                           <td>{$row['nomeDisciplina']}</td> 
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['nomeCurso']}</td> 
                           <td class=\"visible-lg visible-md visible-sm hidden-xs hidden-sm\">{$row['nomeSala']}</td> 
                           <td class=\"text - center\"><button type='button' class='btn btn-info btn-circle' data-toggle='modal' data-target='#modalDadosAula{$row['idAula']}'><i class=\"glyphicon glyphicon-pencil\"></i></button></td>
                    </tr>
                    
                    <div id=\"modalDadosAula{$row['idAula']}\" class=\"modal fade\" role=\"dialog\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4 class=\"modal-title\" id='labelsLogin'>Dados da Aula</h4>
                                </div>        
                                <div class=\"modal-body\">
                                    
                                    <form action='../Control/updateAula.php?tela=calendario' method='post'>
                                    
                                    <div class='col-md-12' style='padding-top: 20px;'>
                                            <label id='labelsLogin'>ID:</label>
                                            <input class=\"form-control\" type='text' disabled value='{$row["idAula"]}' name='fieldIdAula'/>
                                        </div>
                                    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Nome Aula:</label>
                                            <input class=\"form-control\" type='text' value='{$row["nomeAula"]}' name='fieldNomeAula'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label for=\"comment\" id='labelsLogin'>Descrição:</label>
                                            <textarea class=\"form-control\" rows='3' type='text' name='fieldDescricaoAula'>{$row["descricaoAula"]}</textarea>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Hora Inicio:</label>
                                            <input class=\"form-control\" type='text' maxlength=\"5\" onkeypress=\"mascaraHorario( this, event )\" value='{$row["horarioInicio"]}' name='fieldHoraInicio'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Hora Fim:</label>
                                            <input class=\"form-control\" type='text' maxlength=\"5\" onkeypress=\"mascaraHorario( this, event )\" value='{$row["horarioFim"]}' name='fieldHoraFim'/>
                                        </div>
    
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Data Inicio:</label>
                                            <input class=\"form-control\" type='text' onkeypress=\"mascaraData( this, event )\" maxlength='10' value='".converteDataFromSQL($row['dataInicio'])."' name='fieldDataInicio'/>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Data Fim:</label>
                                            <input class=\"form-control\" type='text' onkeypress=\"mascaraData( this, event )\" maxlength='10' value='".converteDataFromSQL($row['dataFim'])."' name='fieldDataFim'/>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label for=\"comment\" id='labelsLogin'>Cenário:</label>
                                            <textarea class=\"form-control\" rows='3' type='text' name='fieldCenario'>{$row["cenario"]}</textarea>
                                        </div>
                                        
                                        <div class='col-md-12'>
                                            <label id='labelsLogin'>Curso:</label>
                                            <input class=\"form-control\" type='text' value='{$row["nomeCurso"]}' disabled name='fieldNomeCurso'/>
                                        </div>
                                        
                                        </div>
                                       
                                    <div class=\"modal-footer\">
                                        <button type='submit' class='btn btn-success' name='alterarAula' value='{$row['idAula']}' style='margin-top: 30px;'>Alterar</button>
                                        </form>
                                        <form action='../Control/deleteAula.php' method='post'>
                                            <button class='btn btn-danger' name='excluir' value='{$row['idAula']}' style='margin-top: 30px;'>Excluir</button>
                                        </form>
                                        <button class='btn btn-warning' data-dismiss='modal' style='margin-top: 30px;'>Cancelar</button>
                                    </div>
                            </div>
                          </div>    
                        </div>
                     </div>";
                }
                echo "
                </table>
            </fieldset>";
        }else{

        }
    }


?>