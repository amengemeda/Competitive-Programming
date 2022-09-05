<?php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer
     */
    function findTheWinner($n, $k) {
        $array = range(1,$n);
        $stack = array();
        $counter = 0;
        $turn=1;
        while(count($array)>1){
            if($turn==$k){
                $turn=1;
            }else{
                array_push($stack,$array[$counter]);   
                $turn++;
            }
            $counter++;
            if($counter>=count($array)){
                if(count($stack)==0){
                   break;
                }
                $array = $stack;
                $stack = array();
                $counter=0;
             }
        }
        
        return array_pop($array);
    }
}
?>