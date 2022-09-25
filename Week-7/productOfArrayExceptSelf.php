<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $prefixProduct = array();
        $temp = 1;
        for($i=0; $i<count($nums); $i++){
            $temp = $nums[$i]*$temp;
            $prefixProduct[$i] = $temp; 
        }
        
        $prefixProduct2 = array();
        $temp2 = 1;
        for($i=count($nums)-1; $i>=0; $i--){
            $temp2 = $nums[$i]*$temp2;
            $prefixProduct2[$i] = $temp2;
        }
        
        $answer = array();
        $answer[0]= $prefixProduct2[1];
        for($i=1; $i<count($nums)-1; $i++){
            $answer[$i]= $prefixProduct[$i-1]*$prefixProduct2[$i+1];
        }
        array_push($answer,$prefixProduct[count($prefixProduct)-2]);
        return $answer;
    }
}

?>