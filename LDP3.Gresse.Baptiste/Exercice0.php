<?php

$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk'];

    function char($str) { 
        $res = "";
        $reverse = strlen($str) - 1;
        for($i = $reverse; $i >= 0; $i--) {
            $res .= $str[$i];
        }  
        return $res;
    }

    function pilf($array) {

        $size = sizeof($array);
        for($i=$size-1; $i>=0; $i--){
            echo $array[$i];
        } 
    }

    $result = char($tab0);
    echo $result;

    pilf($tab0);
?>