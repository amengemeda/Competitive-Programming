<?php
class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        // return $x**$n;
        if($n==0){
            return 1;
        }
        if($n<0){
            $x=1/$x;
            $n=-$n;
        }
        return $x* $this->myPow($x,$n-1);
    }
    }
?>