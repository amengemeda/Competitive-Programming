class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer
 */
public function isOdd($x){
    return $x%2>0 ? 1:0;
}

function numberOfSubarrays($nums, $k) {
    $array = array();
    #conversion
    foreach($nums as $num){
        array_push($array, $this->isOdd($num));
    }
    
    $count=$sum=0;
    $prefix[0] = 1;
    
    for($i=0; $i<count($array); $i++){
        $sum= $sum+$array[$i];
        $diff = $sum-$k;
        if(isset($prefix[$diff])){
            $count = $count+$prefix[$diff];
        }
        
        if(!isset($prefix[$sum])) $prefix[$sum]=0;
        
        $prefix[$sum]++;
    }
    
    return $count;
    
}
}