<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $end = count($height);
        $stack = array();
        $start = 0;
        while($end!=$start){
            $area = abs($end-$start)*min($height[$start],$height[$end]);
            array_push($stack,$area);
            if($height[$start]>$height[$end]){
                $end--;
            }else{
                $start++;
            }
        }
        
        return max($stack);
    }
}
?>