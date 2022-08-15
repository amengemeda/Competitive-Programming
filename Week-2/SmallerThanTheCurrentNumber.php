<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $result = array_fill(0,count($nums),0);
        for($i=0; $i<count($nums); $i++){
            for($j=0; $j<count($nums); $j++){
                if($nums[$i]>$nums[$j]){
                    $result[$i]++;
                }
            }            
        }
        return $result;
    }
}
?>