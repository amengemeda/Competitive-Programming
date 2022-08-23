<?php
class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $array=array();
        
        for($i=0; $i<count($tokens); $i++){
            if($tokens[$i]=="+" || $tokens[$i]=="-" || $tokens[$i]=="*" || $tokens[$i]=="/"){
                if($tokens[$i]=="+"){
                    $array[(count($array)-2)]=(int)($array[(count($array)-2)]+$array[(count($array)-1)]);
                    array_pop($array);
                }elseif($tokens[$i]=="*"){
                    $array[(count($array)-2)]= (int)($array[(count($array)-2)]*$array[(count($array)-1)]);
                    array_pop($array);
                }elseif($tokens[$i]=="-"){
                    $array[(count($array)-2)]= (int)($array[(count($array)-2)]-$array[(count($array)-1)]);
                    array_pop($array);
                }elseif($tokens[$i]=="/"){
                    $array[(count($array)-2)]= (int)($array[(count($array)-2)]/$array[(count($array)-1)]);
                    array_pop($array);
                }
            }else{
                array_push($array,$tokens[$i]);
            }
        }
        return $array[0];
    }
}
?>