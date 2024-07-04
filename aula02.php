<?php
    date_default_timezone_set("America/Sao_pPaulo");

    //Manipulando datas com PHP
    $data = date("d/m/Y");
    $hora = date("H:i:s");

    $dia = date("22");
    $mes = date("02");
    $ano = date("2024");

    $dataTeste = checkdate($mes, $dia, $ano);

    if($dataTeste){
        echo " <p>Data Válida:</p>";
    }
    else{
        echo " <p>Data Inválida:</p>";
    }
    echo " <p>Hoje é dia:" . $data . "Agora são:". $hora. </p>";
?>