<?php
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $l = 0; 
        $node = $head;
        while ($node) {
            $l++;
            $node = $node->next;
        }; 
        if ($l === $n) {
            $node = $head->next;
            $head->next = null;
            return $node;
        }
        $i = 1;
        $node = $head->next;
        $prev = $head;
        while ($node) {
            if ($i === $l - $n) {
               
                $prev->next = $node->next;
                $node->next = null;
                return $head;
            };
            $i++;
            $prev = $node;
            $node = $node->next;
        }
    }
}

?>