<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function minSetSize($arr) {
        $countArray = array();
        $halfArraySize = count($arr)/2;
        for($i=0; $i<count($arr); $i++){
            if(isset($countArray[$arr[$i]])){
                $countArray[$arr[$i]]++;
            }else{
                $countArray[$arr[$i]]=1;
            }            
        }
        
        $array =array();
        foreach($countArray as $key=>$value){
           array_push($array, $value);
        }

        rsort($array);
        $size = 1;
        $sum= 0;
        for($i=0; $i<count($array); $i++){
            $sum = $sum + $array[$i];
            if($sum>=$halfArraySize){
                break;
            }
            $size++;
        }
        return $size;
        
    }
}
?>