<?php
class Solution {

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures) {

        $returnArray = array_fill(0,count($temperatures),0);
        $stack = array();
        for($i = 0; $i<count($temperatures); $i++){
           while(count($stack)!=0 && $temperatures[$i]>end($stack)[0]){
               $returnArray[end($stack)[1]] = $i - array_pop($stack)[1];
           }
            array_push($stack, [$temperatures[$i],$i]);
        }
        
        return $returnArray;
    }
}
?>