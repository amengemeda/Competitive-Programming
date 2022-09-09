<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $counter = 0;
        $listNode = $head;
        while($listNode->next!=null){
            $listNode = $listNode->next;
            $counter++;
        }
        echo $counter;
        $value = ceil($counter/2);
        while($value!=0){
            $head = $head->next;
            $value--;
        }
        return $head;
    }
}

?>