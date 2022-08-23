<?php
class MinStack {
    /**
     */
    public $stack;
    function __construct() {
        $this->stack = array();
    }
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val) {
        array_push($this->stack, $val);
    }
  
    /**
     * @return NULL
     */
    function pop() {
        array_pop($this->stack);
    }
  
    /**
     * @return Integer
     */
    function top() {
       return end($this->stack); 
    }
  
    /**
     * @return Integer
     */
    function getMin() {
        return min($this->stack);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
?>