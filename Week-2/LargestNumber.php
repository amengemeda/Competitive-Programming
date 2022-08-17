<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {
        $number=$nums[0];
        for($i=0; $i<(count($nums)-1); $i++){
         for($j=($i+1); $j<count($nums); $j++){
             if(strcmp($nums[$i].$nums[$j], $nums[$j].$nums[$i])<0){
                 $temp = $nums[$i];
                 $nums[$i]=$nums[$j];
                 $nums[$j] = $temp;
             } 
         }      
        }
        $return = implode("",$nums);
        if($return=="00") $return = "0";
        return $return;
    }
    
}

?>