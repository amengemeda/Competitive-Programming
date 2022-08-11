<?php

/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function countingSort($arr) {
    // Write your code here
    $largestNumber = max($arr);
    
    $frequencyArray = array_fill(0, ($largestNumber+1),0);

    for($i=0; $i<count($arr); $i++){
        $frequencyArray[$arr[$i]]++;
    }

    return $frequencyArray;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
