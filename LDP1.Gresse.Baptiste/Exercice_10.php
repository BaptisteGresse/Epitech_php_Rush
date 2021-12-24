<?php

$age = 2003;

function isAdult($year) {
    $year = date('Y') - $year;
    return ($year >= 18 ? true : false);
}

var_dump(isAdult($age));