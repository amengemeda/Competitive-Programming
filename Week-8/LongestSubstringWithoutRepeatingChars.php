<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if($s=="") return 0;
        $s=str_split($s);
        $temp = array();
        $l=0;
        $result=0;
        for($i=0; $i<count($s); $i++){
            while(in_array($s[$i],$temp)){
                array_shift($temp);
                $l++;
            }
            array_push($temp, $s[$i]);
            $result = max($result,$i-$l+1);
        }
        return $result;
    }
}
?>