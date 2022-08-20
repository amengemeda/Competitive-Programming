<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $countArray = array();
        
        for($i=0; $i<count($nums); $i++){
            if(isset($countArray[$nums[$i]])){
                $countArray[$nums[$i]]++;
            }else{
                $countArray[$nums[$i]]=1;
            }
        }
        $counter = 0;
        arsort($countArray);
        $returnArray = array();
        foreach($countArray as $key => $value){
            if($counter==$k) break;
            array_push($returnArray,$key);
            $counter++;
        }
        
        return $returnArray;
    }
}
?>