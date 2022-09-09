<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseParentheses($s) {
        $string = str_split($s);
        $stack = array();
        for($i=0; $i<count($string); $i++){
            
            if($string[$i]!=")") array_push($stack, $string[$i]);
            if($string[$i]==")"){
                $str = array();
                while(end($stack)!="("){
                    array_push($str,array_pop($stack));
                }
                array_pop($stack);
                while(count($str)>0){
                     array_push($stack,array_shift($str));   
                }
            } 
        }
        return implode("",$stack);
    }
}
?>