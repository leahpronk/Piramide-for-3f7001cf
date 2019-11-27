<?php

$piramide = readline ("Hoeveel stapels wil je hebben?");

for ($i = 1; $i <=$piramide; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo '<br />';
}