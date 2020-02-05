<?php

$hora = date('H');
$minuto = date('i');
$segundo = date('s');


function Saluda()
{
    $hora = date('H');
    $minuto = date('i');
    $segundo = date('s');
    $nombre = "Adrián";
    $fecha = date('r');

    if ($hora >= 7 || $hora <= 11)
    {
        echo "Buenos días $nombre son las $fecha";

        if ($minuto <= 30 || $hora == 12) 
        {
            echo "Buenos días $nombre son las ";
        }
    }   

    if ($hora >= 12 || $hora <= 19)
    {
        echo "Buenas tardes $nombre son las $fecha";

        if ($minuto >= 30 || $hora >= 12) 
        {
            echo "Buenas tardes $nombre son las ";
        }
    }  
 
    else {
        echo "Buenas tardes";

    }
}

Saluda();
