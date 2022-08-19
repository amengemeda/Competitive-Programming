<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minPairSum($nums) {
        sort($nums);
        $j= count($nums)-1;
        $sum = 0;
        for($i=0; $i<$j; $i++){
            $sum = ($nums[$i]+$nums[$j])> $sum ? ($nums[$i]+$nums[$j]) : $sum;
            $j--;
        }
        return $sum;
    }
}
?>