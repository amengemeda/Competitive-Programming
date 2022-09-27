<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function longestOnes($nums, $k) {
        $i = 0;
        $j = -1;
        $max = 0;
        $zeros = 0;
        
        while($j != sizeof($nums) - 1) {
            $j++;
            
            if($nums[$j] == 0) $zeros++;
            
            if($zeros > $k) {
                //Move i forward till zeros back in limits
                while($nums[$i] == 1) {
                    $i++;
                }
                
                //This reduces number of zeroes
                $i++;
                $zeros--;
            } else {
                $max = max($max, $j - $i + 1);
            }
        }
        
        return $max;
        
        
    }
}
?>