<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $node
     * @return 
     */
    function deleteNode($node) {
        $next = $node->next;
        $node->val = $next->val;
        $node->next = $next->next;
        $next->next = null;
    }
}
?>