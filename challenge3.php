<?php

function result($N, $aMod) {
    
    $fmt = new NumberFormatter('en', NumberFormatter::SPELLOUT);
    
    for ($num = 1; $num <= $N; $num++) {
        
        $isMod = false;
        
        for ($i=0; $i < count($aMod); $i++) {
            if ($num % $aMod[$i] == 0) {
                $isMod = true;
                echo ucfirst($fmt->format($aMod[$i]));
            }
        }
        
        if ($isMod === false) {
            echo $num;
        }
        
        echo "\n";
    }
    
}

if (!extension_loaded('intl')) {
    echo "Required PHP extension not found: intl\n";
    exit;
}

result(100, [3, 5, 7, 11]); 