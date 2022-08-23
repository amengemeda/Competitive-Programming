<?php
class MyQueue {
    /**
     */
    public $queue;
    function __construct() {
        $this->queue = array();
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->queue,$x);
    }
  
    /**
     * @return Integer
     */
    function pop() {
        $return = $this->queue[0];
        $this->queue = array_slice($this->queue,1);
        return $return;
    }
  
    /**
     * @return Integer
     */
    function peek() {
        return ($this->queue[0]);
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        echo json_encode($this->queue);
        return count($this->queue) == 0 ? true:false;
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
?>