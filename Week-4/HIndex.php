<?php
class Solution {

    /**
     * @param Integer[] $citations
     * @return Integer
     */
    function hIndex($citations) {
        sort($citations);
        $stack = array();
        for($i=0; $i<count($citations); $i++){
            if((count($citations)-$i)<=$citations[$i]){
                return (count($citations)-$i);
            }
            
        }
        return 0;
    }
}
?>