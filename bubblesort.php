<?php
<?php

/*
 * Complete the 'countSwaps' function below.
 *
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function swap(&$a, &$b){
    $c= $b;
    $b= $a;
    $a = $c;
}

function countSwaps($a) {
    // Write your code here
    $noOfSwaps = 0;
    for ($i = 0; $i < count($a); $i++) {
        
        for ($j = 0; $j < (count($a) - 1); $j++) {
            // Swap adjacent elements if they are in decreasing order
            if ($a[$j] > $a[$j + 1]) {
                swap($a[$j], $a[$j + 1]);
                $noOfSwaps++;
            }
        }
    
    }
    echo "Array is sorted in ".$noOfSwaps." swaps.\n";
    echo "First Element: ".$a[0]."\n";
    echo "Last Element: ".$a[(count($a)-1)]."\n";
}

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

countSwaps($a);

?>