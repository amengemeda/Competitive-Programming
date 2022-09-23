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
       $listNode = new ListNode(0,$head);
       
       $prev = $listNode;
       
        while($head){
             if($head->next && $head->val == $head->next->val){
                 while($head->next && $head->val == $head->next->val){
                     $head = $head->next;
                 }
                 $prev->next = $head->next;
             }else{
                 $prev = $prev->next;
             }
            $head= $head->next;
        }
        return $listNode->next;

    }
}

?>