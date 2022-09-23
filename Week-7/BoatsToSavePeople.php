<?php
class Solution {

    /**
     * @param Integer[] $people
     * @param Integer $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit) {
        sort($people);
        $end = count($people)-1;
        $start = 0;
        $counter = 0;
        while($end>=$start){
            if(($people[$end]+$people[$start])<=$limit){
                $end--;
                $start++;
            }else{
                $end--;
            }
            $counter++;
        }
        return $counter;
    }
}
?>