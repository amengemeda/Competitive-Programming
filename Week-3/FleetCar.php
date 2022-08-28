<?php
class Solution {

    /**
     * @param Integer $target
     * @param Integer[] $position
     * @param Integer[] $speed
     * @return Integer
     */
    function carFleet($target, $position, $speed) {
        $pairs = array();
        
        for($i=0; $i<count($position); $i++){
            array_push($pairs,[$position[$i],$speed[$i]]);
        }
                       
        usort($pairs, function($a, $b) {
            return $a[0] <=> $b[0];
        });
        
        $stack = array();
        for($i=(count($pairs)-1); $i>=0; $i--){
            $time = (float)(($target-$pairs[$i][0])/$pairs[$i][1]);
            array_push($stack,$time);
            if(count($stack)!=0 && end($stack)<=$stack[count($stack)-2]){
                array_pop($stack);
            }
        }
        
        return count($stack);
    }
    
 
}
?>