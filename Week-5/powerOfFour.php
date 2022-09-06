<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfFour($n) {
        while($n>=4){
            if($n%4!=0){
                return false;
            }
            $n = $n/4;
        }
        return $n==1? true: false;
    }
}
?>