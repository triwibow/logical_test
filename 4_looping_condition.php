<?php

function loopCondition($n)
{
    for($i = 1; $i <= $n; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            echo $i."  FooBar <br>";
        } elseif($i % 3 == 0){
            echo $i."  Foo <br>";
        } elseif($i % 5 == 0){
            echo $i." Bar <br>";
        }
    }
}

loopCondition(50);