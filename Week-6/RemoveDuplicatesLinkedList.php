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
    function deleteDuplicates($head) {
        $nodeValue = null;
        $prev = new ListNode();
        $return = $prev;
        while($head){
            if($head->val===$nodeValue){
                if($head->next==null){
                    $prev->next = null;
                }
                $head = $head->next;
                continue;
            }
            $nodeValue = $head->val;
            $prev->next = $head;
            $head = $head->next;
            $prev = $prev->next;
        }
        return $return->next;
    }
}

?>