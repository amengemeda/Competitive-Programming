<?php
class Solution {

    /**
     * @param Integer[] $piles
     * @return Integer
     */
    function maxCoins($piles) {
        rsort($piles);
        $sum=0;
        echo json_encode($piles);
        $size = count($piles);
        for($i=0; $i<$size; $i=$i+2){
            $sum = $sum + $piles[$i+1];
            $size--;
        }
        return $sum;
    }
}
?>