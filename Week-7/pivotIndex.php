<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $sum = array_sum($nums);
        $curr_sum = 0;
        for($i=0; $i<count($nums); $i++){
            if(($sum - $curr_sum - $nums[$i])==$curr_sum){
                return $i;
            }
            $curr_sum = $curr_sum + $nums[$i];
        }
        return -1;
    }
}
?>