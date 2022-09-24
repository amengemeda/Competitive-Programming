<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
     function subarraySum($nums, $k) 
    {
        $count = 0; $sum = 0; $hm[0] = 1;
        
        foreach($nums as $num)
        {
            $sum += $num;
            $prefix = $sum - $k;
                       
            if($hm[$prefix] != null)
                $count += $hm[$prefix];
            
            $hm[$sum] = ($hm[$sum] != null) ? $hm[$sum]+1 : 1;
        }
        return $count;
    }
}
?>