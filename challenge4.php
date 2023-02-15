<?php

function result($N, $aMod) {
    
    for ($num = 1; $num <= $N; $num++) {
        
        $isMod = false;
        
        for ($i=0; $i < count($aMod); $i++) {
            
            if ($aMod[$i] == 0) {
                echo 'DivisionByZeroError';
                exit;
            }
            
            if ($num % $aMod[$i] == 0) {
                $isMod = true;
                echo spell_number($aMod[$i]);
            }
        }
        
        if ($isMod === false) {
            echo $num;
        }
        
        echo "\n";
    }
    
}

function loadConfig() {
    return array(
        11 => 'seven',
        13 => 'cat'
    );
}

function spell_number($number) {
    
    $mapping = array(
        1 => 'one', 
        2 => 'two', 
        3 => 'three', 
        4 => 'four',
        5 => 'five', 
        6 => 'six', 
        7 => 'seven', 
        8 => 'eight', 
        9 => 'nine',
        10 => 'ten', 
        11 => 'eleven', 
        12 => 'twelve', 
        13 => 'thirteen',
        14 => 'fourteen', 
        15 => 'fifteen', 
        16 => 'sixteen', 
        17 => 'seventeen',
        18 => 'eighteen', 
        19 => 'nineteen', 
        20 => 'twenty', 
        30 => 'thirty',
        40 => 'forty', 
        50 => 'fifty', 
        60 => 'sixty', 
        70 => 'seventy',
        80 => 'eighty', 
        90 => 'ninety'
    );
    
    $mapping = array_replace($mapping, loadConfig());
    
    if ($number > 99) {
        if (isset($mapping[$number])) {
            return $mapping[$number];
        } else {
            $fmt = new NumberFormatter('en', NumberFormatter::SPELLOUT);
            return lcfirst($fmt->format($number));
        }
    }
    
    if ($number < 20) {
        return $mapping[$number];
    }
    
    $tens = $mapping[floor($number / 10) * 10];
    $units = $number % 10;
    
    return $tens . (($units > 0) ? '-' . $mapping[$units] : '');
}

if (!extension_loaded('intl')) {
    echo "Required PHP extension not found: intl\n";
    exit;
}

result(100, [3, 5, 11, 13, 19]);
