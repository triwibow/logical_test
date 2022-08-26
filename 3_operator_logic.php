<?php

function bagi($x, $y){
    $r = 0;
    for($y; $y <= $x; $x-=$y){
        $r += 1;
    }

    echo $r;
}

bagi(7, 2);
echo "<br>";
bagi(8, 4);