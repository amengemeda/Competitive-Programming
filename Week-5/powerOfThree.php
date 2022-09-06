<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        while($n>=3){
            if($n%3!=0){
                return false;
            }
            $n = $n/3;
        }
        return $n==1? true: false;
        
    }
}
?>