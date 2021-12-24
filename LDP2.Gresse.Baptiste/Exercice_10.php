<?php

$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk'];

function onlyTheBestKey($array) {

    $keys = array_keys($array);
    $longestKey = array_reduce($keys, function ($a, $b) { return strlen($a) > strlen($b) ? $a : $b; });
    echo($longestKey);
}

onlyTheBestKey($tab3);