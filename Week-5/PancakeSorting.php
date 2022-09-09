<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function pancakeSort($arr) {
        $stack = array();
        while(count($arr)>0){
            $index = array_search(max($arr),$arr);
            if($index==0){
                array_push($stack,count($arr));
                $arr = array_reverse($arr);
                array_pop($arr);
            }else{
                array_push($stack,($index+1));
                $array = array();
                while($index>=0){
                    array_push($array,array_shift($arr));
                    $index--;
                }
                while(count($array)>0){
                    array_unshift($arr,array_shift($array));
                }
            }
        }
        return $stack;
        
    }
}
?>