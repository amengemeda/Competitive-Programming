<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $max = max($nums);
        $countingArray = array_fill(0,($max+1),0);
        for($i=0; $i<=count($nums);$i++){
            $countingArray[$nums[$i]]++;
        }
        

        $start=0;
        for($i=0; $i<=$max;$i++){
            for($j=$start; $j<($start+$countingArray[$i]);$j++){
                $nums[$j]=$i;
            }
            $start = $start + $countingArray[$i]; 
        }
        
    }
}

?>