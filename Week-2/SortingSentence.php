<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function sortSentence($s) {
        $sentence = array_fill(0, count(explode(" ",$s)), "");
        $chars = str_split($s);
        $j=0;
        
        for($i=0; $i<count($chars); $i++){
            
            if(is_numeric($chars[$i])){    
                $sentence[($chars[$i]-1)] = substr($s,$j,($i-$j));
                $j = $i+2;
            }
        }
        
        $sentence = implode(" ", $sentence);
        return $sentence;
    }
}
?>