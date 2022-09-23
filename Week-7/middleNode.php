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
        $dummy = $head;
        while($dummy){
            $dummy=$dummy->next;
            $counter++;
        }
        $mid = (int)($counter/2);
        // $dummy = $head;
        $counter = 0;
        while($counter<$mid){
            $head= $head->next;
            $counter++;
        }
        return $head;
    }
}
?>