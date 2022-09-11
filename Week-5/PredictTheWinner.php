<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function PredictTheWinner($nums) {
        return $this->winner($nums, 0, count($nums) - 1, 1) >= 0;
    }
     public function winner($nums, $s, $e, $turn) {
       if ($s == $e) return $turn * $nums[$s];
        $a = $turn * $nums[$s] + $this->winner($nums, $s + 1, $e, -$turn);
        $b = $turn * $nums[$e] + $this->winner($nums, $s, $e - 1, -$turn);
        return $turn * max($turn * $a, $turn * $b);
    }
}
?>