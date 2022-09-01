<?php
class Solution {

    /**
     * @param String $num
     * @param Integer $k
     * @return String
     */
    function removeKdigits($num, $k) {
        $numsArray = str_split($num);
        $stack = array();
        for($i=0; $i<count($numsArray); $i++){
            while(count($stack)>0 && end($stack)>$numsArray[$i] && $k>0){
                array_pop($stack);
                $k--;
            }
            array_push($stack,$numsArray[$i]);
        }
        while($k>0){
            array_pop($stack);
            $k--;
        }
        while($stack[0]==0 && count($stack)>1){
            array_shift($stack);
        }
        $value = (string)implode('',$stack);
        return $value!="" ? $value : "0";
    }
}
?>