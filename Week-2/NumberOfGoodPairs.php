<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        sort($nums);
        $counter=0;
        for($i=0; $i<count($nums); $i++){
         for($j=($i+1); $j<count($nums); $j++){
            if($nums[$i]==$nums[$j]) $counter++;
            if($nums[$i]!=$nums[$j]) break;
         }
         
        }
        return $counter;
    }
}

?>