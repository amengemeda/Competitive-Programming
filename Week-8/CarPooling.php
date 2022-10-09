<?php
class Solution {

    /**
     * @param Integer[][] $trips
     * @param Integer $capacity
     * @return Boolean
     */
    function carPooling($trips, $capacity) {
        foreach ($trips as $trip) {
            list($numPassenger, $start, $end) = $trip;
            $locations[$start] += $numPassenger;
            $locations[$end] -= $numPassenger;
        }
        
        ksort($locations);
        $count=0;
        foreach($locations as $point=>$numPassenger){
            $count += $numPassenger;
            if($count>$capacity) return false;
        }
        
        return true;
    }
}
?>