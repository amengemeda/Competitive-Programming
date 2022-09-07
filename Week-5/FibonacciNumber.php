<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if($n==1){
            return 1;
        }elseif($n==0){
            return 0;
        }else{
            return $this->fib($n-1)+$this->fib($n-2);
        }
        
    }
}
?>