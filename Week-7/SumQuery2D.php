<?php
class NumMatrix {
    /**
     * @param Integer[][] $matrix
     */
    
  
    public $matrix;
    public $prefixSum;
    function __construct($matrix) {
        $this->matrix = $matrix;
        $this->prefixSum = array();
        $row = count($matrix)+1;
        $column = count($matrix[0])+1;
        echo "row:".$row." col:".$column;
        for($i=0; $i<$row; $i++){
             $array = array_fill(0,$column,0);
             array_push($this->prefixSum, $array);
        }

        for($i=1; $i<$row; $i++){
            $row_sum = 0;
            for($j=1; $j<$column; $j++){
                $row_sum = $row_sum + $this->matrix[$i-1][$j-1];
                $this->prefixSum[$i][$j] = $this->prefixSum[$i-1][$j] + $row_sum;
            }
        }
        echo json_encode($this->prefixSum);
    }
  
    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @return Integer
     */
    function sumRegion($row1, $col1, $row2, $col2) {
        $sum = $this->prefixSum[$row2+1][$col2+1] - $this->prefixSum[$row2+1][$col1] - $this->prefixSum[$row1][$col2+1] + $this->prefixSum[$row1][$col1];
  
        return $sum;

    }
}

/**
 * Your NumMatrix object will be instantiated and called as such:
 * $obj = NumMatrix($matrix);
 * $ret_1 = $obj->sumRegion($row1, $col1, $row2, $col2);
 */

?>