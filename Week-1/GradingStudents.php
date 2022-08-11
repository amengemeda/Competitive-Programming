<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $result = array();
    for($j=0; $j<=(count($grades)-1); $j++){
        
        if($grades[$j]<38){
            $result[($j-1)] = $grades[$j];
            continue;
        }
        
        $value = 5-($grades[$j]%5);
        
        if($value<3){
            $result[($j-1)] = $grades[$j] + $value;
        }else{
            $result[($j-1)] = $grades[$j];
        }
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
