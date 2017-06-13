<?php
    include "conexaoCalendario.php";



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
        mostraAulas();
    }

    function mostraAulas(){

        include "selectDisciplina.php";


        if(isset($_GET['id'])){
            echo "
        <fieldset style=\"margin-bottom: 150px; margin-top: 60px; left: 0; right: 0\">
            <legend id=\"labelsLogin\">Aulas</legend>
            <table class=\"table\">
                <tr>
                    <th>ID</th>
                    <th>Nome Aula</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fim</th>
                    <th>Nome Disciplina</th>
                    <th>Curso</th>
                    <th>Sala</th>
                    <th class=\"text-center\" >Editar</th>
                    <th class=\"text-center\">Remover</th>
                </tr>";



            while ($row = mysqli_fetch_assoc($result3)) {
                echo " <tr>
                       <td>".$row['idAula']."</td>
                       <td>".$row['nomeAula']."</td>
                       <td>".$row['dataInicio']."</td>
                       <td>".$row['dataFim']."</td>
                       <td>".$row['horarioInicio']."</td>
                       <td>".$row['horarioFim']."</td>
                       <td>".$row['nomeDisciplina']."</td> 
                       <td>".$row['nomeCurso']."</td> 
                       <td>".$row['nomeSala']."</td> 
                       <td class=\"text-center\"><i class=\"glyphicon glyphicon-pencil\"></i></td>
                       <td class=\"text-center\"><i class=\"glyphicon glyphicon-remove\"></i></td>
                </tr>";}
            echo "
            </table>
        </fieldset>";
        }else{

        }
    }

?>