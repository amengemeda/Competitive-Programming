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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $listNode = new ListNode(0);
        $curr = $listNode;
        $carry = 0;
        while ($l1 != null || $l2 != null || $carry != 0) {
            $x = ($l1 != null) ? $l1->val : 0;
            $y = ($l2 != null) ? $l2->val : 0;
            $sum = $carry + $x + $y;
            $carry = (int)($sum / 10);
            $curr->next = new ListNode($sum % 10);
            $curr = $curr->next;
            if ($l1 != null)
                $l1 = $l1->next;
            if ($l2 != null)
                $l2 = $l2->next;
        }
        return $listNode->next;
    }
    
    
}
?>