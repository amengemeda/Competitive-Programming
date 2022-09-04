<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        $return = array();
        $left = 0;
        $right = count($matrix[0]);
        $top = 0;
        $bottom = count($matrix); 
        while($left<$right && $top<$bottom){
            #navigate to the right
            for($i=$left; $i<$right; $i++){
                 array_push($return,$matrix[$top][$i]);   
            }
            $top++;
            
            #navigate to the bottom
            for($i=$top; $i<$bottom; $i++){
                 array_push($return,$matrix[$i][($right-1)]);   
            }
            $right--;
            
            if($left>=$right || $top>=$bottom){
                break;
            }
            #navigate to the left
            for($i=($right-1); $i>$left-1; $i--){
                 array_push($return,$matrix[($bottom-1)][$i]);   
            }
            $bottom--;
            
            #navigate to the top
            for($i=($bottom-1); $i>$top-1; $i--){
                 array_push($return,$matrix[$i][$left]);   
            }
            $left++;
        }
        return $return;
    }
}
?>