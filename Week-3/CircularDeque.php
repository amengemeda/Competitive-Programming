<?php
class MyCircularDeque {
    /**
     * @param Integer $k
     */
    private $deque;
    private $totalSize;
    function __construct($k) {
        $this->deque = array();
        $this->totalSize = $k;
    }
  
    /**
     * @param Integer $value
     * @return Boolean
     */
    function insertFront($value) {
        if($this->isFull()) return false;
        array_unshift($this->deque,$value);
        return true;
    }
  
    /**
     * @param Integer $value
     * @return Boolean
     */
    function insertLast($value) {
        if($this->isFull()) return false;
        array_push($this->deque,$value);
        return true;
    }
  
    /**
     * @return Boolean
     */
    function deleteFront() {
        if($this->isEmpty()) return false;
        array_shift($this->deque);
        return true;        
    }
  
    /**
     * @return Boolean
     */
    function deleteLast() {
        if($this->isEmpty()) return false;
        array_pop($this->deque);
        return true;         
    }
  
    /**
     * @return Integer
     */
    function getFront() {
        if($this->isEmpty()) return -1;
        return $this->deque[0]; 
    }
  
    /**
     * @return Integer
     */
    function getRear() {
        if($this->isEmpty()) return -1;
        return $this->deque[(count($this->deque)-1)]; 
    }
  
    /**
     * @return Boolean
     */
    public function isEmpty() {
        return count($this->deque)==0 ? true:false;
    }
  
    /**
     * @return Boolean
     */
    public function isFull() {
        return count($this->deque)==$this->totalSize ? true:false;
    }
}

/**
 * Your MyCircularDeque object will be instantiated and called as such:
 * $obj = MyCircularDeque($k);
 * $ret_1 = $obj->insertFront($value);
 * $ret_2 = $obj->insertLast($value);
 * $ret_3 = $obj->deleteFront();
 * $ret_4 = $obj->deleteLast();
 * $ret_5 = $obj->getFront();
 * $ret_6 = $obj->getRear();
 * $ret_7 = $obj->isEmpty();
 * $ret_8 = $obj->isFull();
 */
?>