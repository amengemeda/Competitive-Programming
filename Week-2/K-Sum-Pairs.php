<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxOperations($nums, $k) {
        if($k<=1) return 0;
        $counter = 0;
        $array =array();
        for($i=0; $i<count($nums); $i++){
            $value= $k - $nums[$i];
            if(isset($array[$value]) && $array[$value]>0){
                $counter++;
                $array[$value]--;
            }else{
                if(!isset($array[$nums[$i]])) $array[$nums[$i]]=0;
                $array[$nums[$i]]++;
            }
        }

        return $counter;
    }
}

?>