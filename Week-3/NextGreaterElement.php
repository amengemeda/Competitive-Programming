<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $returnArray = array();
        for($i=0; $i<count($nums1); $i++){
            $index = array_search($nums1[$i],$nums2);
            
            if(!isset($nums2[($index+1)])){
                array_push($returnArray,-1);
                continue;
            }
            
            $foundGreater=false;
            for ($j=($index+1); $j<count($nums2); $j++){
                if($nums2[$j]>$nums1[$i]){
                    $foundGreater = true;
                    array_push($returnArray,$nums2[$j]);
                    break;
                }
            }
            if(!$foundGreater){    
                array_push($returnArray,-1);
            }
        }
        return $returnArray;
    }
}
?>