<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function calculate($s) {
        $charArray = str_split($s);
        $stack = array();
        $curr = 0;
        $opp = '+';
        $sum=0;
        for($i=0; $i<count($charArray); $i++){
            if(is_numeric($charArray[$i])){
                $curr = $curr*10 + $charArray[$i];
            }
            if(!is_numeric($charArray[$i]) && $charArray[$i]!=' ' || $i==count($charArray)-1)             {
                if($opp == "+"){
                    array_push($stack,(int)$curr);
                }elseif($opp == "-"){
                    array_push($stack, -(int)$curr);
                }elseif($opp=="*"){
                    array_push($stack, (int)(array_pop($stack)*$curr));
                    
                }elseif($opp=="/"){
                    array_push($stack, (int)(array_pop($stack)/$curr));
                }
                $opp= $charArray[$i];
                $curr = 0;
            }
            
        }
        
        for($i=0; $i<count($stack); $i++){
            $sum = $sum + $stack[$i];
        }
        return $sum;
    }
}
?>