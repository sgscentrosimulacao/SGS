<?php

function converteDataToSQL($dataPHP){

    $dmaI = explode('/',($dataPHP));
    $dataSQL= $dmaI[2]."-".$dmaI[1]."-".$dmaI[0]."";

    return $dataSQL;
}

function converteDataFromSQL($dataPHP){

    $dmaI = explode('-',($dataPHP));
    $dataSQL= $dmaI[2]."/".$dmaI[1]."/".$dmaI[0]."";

    return $dataSQL;
}

function converteHoraToSQL($horaPHP){

    return $horaPHP.":00";
}
?>