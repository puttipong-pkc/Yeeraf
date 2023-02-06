<?php

function result($N) {
    
    for ($num = 1; $num <= $N; $num++) {
        if ($num % 3 == 0 && $num % 5 == 0) {
            echo 'ThreeFive';
        } else if ($num % 3 == 0) {
            echo 'Three';
        } else if ($num % 5 == 0) {
            echo 'Five';
        } else {
            echo $num;
        }
        echo "\n";
    }
    
}

result(100);