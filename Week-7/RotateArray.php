<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
         $size = count($nums); 
         $k %= $size;
         $remove = array_splice($nums, ($size-$k)); 
         $nums = array_merge($remove, $nums);
    }
}
?>