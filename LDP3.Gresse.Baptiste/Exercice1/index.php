<?php
$max = 10;
    foreach ($_POST as $key => $value) {
        if (strlen($value)>$max){
            echo $key.' => '.substr($value,0,7)."...<br>";
        }else{
            echo "$key => $value<br>";
        }
    }

?>