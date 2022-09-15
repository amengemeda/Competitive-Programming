<?php
class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        sort($intervals);
        $stack = array();
        array_push($stack,$intervals[0]);
        for($i=1; $i<count($intervals); $i++){
            if(end($stack)[1]>=$intervals[$i][0]){
                $value = array_pop($stack);
                array_push($stack,[$value[0],max($intervals[$i][1],$value[1])]);
            }else{
                array_push($stack,$intervals[$i]);
            }     
        }
        return $stack;
    }
}
?>