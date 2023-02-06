<?php

function twoSum($nums, $target) {
    
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i+1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == $target) {
                return "{$i},{$j}";
            }
        }
    }
    
    return 'no output';
}

// echo twoSum([2, 7, 11, 15], 9);
// echo twoSum([3, 2, 4], 6);
// echo twoSum([3, 1, 2, 3],6);
// echo twoSum([3, 2], 3);
echo twoSum([3, 3], 6);