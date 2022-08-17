<?php
class Solution {

    /**
     * @param String[] $nums
     * @param Integer $k
     * @return String
     */
    function kthLargestNumber($nums, $k) {
        sort($nums);
        return (string)$nums[(count($nums)-$k)];
    }
}
?>