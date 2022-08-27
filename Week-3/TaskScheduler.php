<?php
class Solution {

    /**
     * @param String[] $tasks
     * @param Integer $n
     * @return Integer
     */
    function leastInterval($tasks, $n) {
        $time=0;
        $countArray=array();
        for($i=0; $i<count($tasks); $i++){
            if(!isset($countArray[$tasks[$i]])) $countArray[$tasks[$i]] = 0;
            $countArray[$tasks[$i]]++;
        }
        $maxHeap = new SplMaxHeap();
        foreach($countArray as $key=>$value) $maxHeap->insert($value);
        
        $queue = array();
        $time= 0;
        while(!$maxHeap->isEmpty() || count($queue)!=0){
            $time++;
            if(!$maxHeap->isEmpty()){
                $count = $maxHeap->extract() - 1;
                if($count){
                    array_push($queue,[$count,($time+$n)]);
                }
            }
            if($queue && $queue[0][1]==$time){
                $maxHeap->insert(array_shift($queue)[0]);
            }
        }
        return $time;
        
    }
}
?>