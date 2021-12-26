<?php
    function sevenDay(): void{
          if(date('d') + 1 == 19 && date('N') + 1 == 5) {
            echo("dans les 7 prochains jours Il y a un vendredi 19.");
        } else if(date('d') + 2 == 19 && date('N') + 2 == 5) {
            echo("dans les 7 prochains jours Il y a un vendredi 19.");
        } else if(date('d') + 3 == 19 && date('N') + 3 == 5) {
            echo("dans les 7 prochains jours Il y a un vendredi 19.");
        } else if(date('d') + 4 == 19 && date('N') + 4 == 5) {
            echo("dans les 7 prochains jours Il y a un vendredi 19.");
        } else if(date('d') + 5 == 19 && date('N') + 5 == 5) {
            echo("dans les 7 prochains jours Il y a un vendredi 19.");
        } else if(date('d') + 6 == 19 && date('N') + 6 == 5) {
            echo("dans les 7 prochains jours Il y a un vendredi 19.");
        } else if(date('d') + 7 == 19 && date('N') + 7 == 5) {
        } else {
            echo("dans les 7 prochains jours Il n'y a pas de vendredi 19.");
        }
    }
    
    sevenDay();

?>