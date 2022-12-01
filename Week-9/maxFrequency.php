<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxFrequency($nums, $k) {
        $right = $left = 0;
        $total = $res = 0;
        
        sort($nums);
        
        while($right< count($nums)){
            $total+=$nums[$right];
            while(($nums[$right]*($right-$left+1)) > ($total+$k)){
                $total-=$nums[$left];
                $left++;
            }
            
            $res = max($res, $right-$left+1);
            $right++;
        }
        
        return $res;
    }
}

?>