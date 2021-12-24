<?php

$police = "I CALL THE CYBER POLICE";
$temp = [];

function myEcho($data) {
    echo("$data\n");
}

$temp = explode(' ', $police);

foreach($temp as $key => $value) {
    myEcho($value);
}

