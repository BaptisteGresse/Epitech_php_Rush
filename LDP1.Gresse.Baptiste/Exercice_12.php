<?php

$note = 16;
$cheat = false;
$rendering = true;

function getComment(int $note, bool $triche, bool $rendu) {
    if($rendu == false) {
        echo("Votre n'avez pas rendu de devoir");
    } else if ($rendu != false) {
        switch($note) {
            case 0:
                echo("Aucun effort");
                break;
            case 5:
                echo("A essayer");
                break;
            case 7:
                echo("C'est mieux que 5");
                break;
            case 10:
                echo("Pile poil la moyenne");
                break;
            case 12:
                echo("Assez bien");
                break;
            case 14:
                echo( "Bien");
                break;
            case 16:
                if($triche != true) {
                    echo("Très bien");
                } else {
                    echo("Triche.");
                }
                break;
            case 20:
                if($triche != true) {
                    echo("Excellent ");
                } else {
                    echo("Triche excellente.");
                }
                break;
        }
    }
}

getComment($note, $cheat, $rendering);

