<?php

function isOddd($data) {
    return ($data % 2 ? true : false);
}

for($i = 0; $i <= 20; $i++) {
    echo(IsOddd($i) == true ? $i.' ' : "");
}
