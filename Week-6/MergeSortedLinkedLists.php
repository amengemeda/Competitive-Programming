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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $head = new ListNode();
        $list3 = $head;
        while($list1 && $list2){
            if($list1->val >= $list2->val){
                $list3->next = $list2;
                $list2 = $list2->next;
            }elseif($list1->val <= $list2->val){
                $list3->next = $list1;
                $list1 = $list1->next;
            }
            $list3 = $list3->next; 
        }
        if($list1){
            $list3->next = $list1;
        }elseif($list2){
            $list3->next = $list2;
        }
        
        return $head->next;
    }
}
?>