<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minIncrementForUnique($nums) {
        sort($nums);
            
        $steps= 0; 
        for($i=1; $i<count($nums); $i++){
            $prev = $nums[$i-1];
            $curr = $nums[$i];
            if($curr <= $prev){
                $steps = $steps + ($prev - $curr) + 1;
                $nums[$i] = $prev + 1;
            }
        }
        return $steps;
    }
}
?>