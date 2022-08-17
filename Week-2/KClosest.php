<?php
class Solution {

    /**
     * @param Integer[][] $points
     * @param Integer $k
     * @return Integer[][]
     */
    function kClosest($points, $k) {
        $distanceArray= array();
        
        for($i=0; $i<count($points); $i++){
            
            $distance = sqrt(($points[$i][0]*$points[$i][0]) + ($points[$i][1])*$points[$i][1]);
            array_push($distanceArray,$distance);   
        }


        sort($distanceArray);
        $kdistance = $distanceArray[$k-1];
        
        $returnArray = array();
        for($i=0; $i<count($points); $i++){
             $distance = sqrt(($points[$i][0]*$points[$i][0]) + ($points[$i][1])*$points[$i][1]);
            if($distance<=$kdistance){
                array_push($returnArray,$points[$i]);
            }
        }
        return $returnArray;
                                            
    }
}
?>