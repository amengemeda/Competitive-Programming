<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function rearrangeArray($nums) {
        for($i=1; $i<count($nums); $i++){

            $j=$i+1;
            while($j<count($nums)){
                if(($nums[$i-1]+$nums[$j])/2 != $nums[$i]){
                    $temp = $nums[$i];
                    $nums[$i] = $nums[$j];
                    $nums[$j] = $temp;
                    break;
                }
                echo json_encode($nums);
                    echo "j:".$j." "."i:".$i;
                if(($nums[$i-1]+$nums[$j])/2 == $nums[$i] && $j==(count($nums)-1)){
                    shuffle($nums);
                    $j=$i;
                    echo "called";
                }
                $j++;

            }
        }
        return $nums;
    }
}
?>