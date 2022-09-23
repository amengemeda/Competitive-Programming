<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $return = array();
        $zeros = 0;
        for($i=0; $i<count($nums); $i++){
            if($nums[$i]==0){
                $zeros++;
            }else{
                array_push($return, $nums[$i]);
            }
        }
        while($zeros){
            array_push($return,0);
            $zeros--;
        }
        $nums=$return;
    }
}
?>