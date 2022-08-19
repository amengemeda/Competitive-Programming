<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $l
     * @param Integer[] $r
     * @return Boolean[]
     */
    function checkArithmeticSubarrays($nums, $l, $r) {
        $size = count($l);
        $returnArray = array();
        for($i=0; $i<$size; $i++){
            $array = array();
            for($j=$l[$i]; $j<=$r[$i]; $j++){
                array_push($array,$nums[$j]);
            }
            sort($array);
            $arithmetic = true;
            for($j=0; $j<(count($array)-1); $j++){
                $difference = $array[$j+1] - $array[$j];
                $base = $array[1] - $array[0];
                if($difference!=$base){
                    $arithmetic = false;
                    break;
                }
            }
            array_push($returnArray,$arithmetic);
        }
            return $returnArray;
    }
}
?>