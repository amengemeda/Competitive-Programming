class Solution {

/**
 * @param Integer[] $pushed
 * @param Integer[] $popped
 * @return Boolean
 */
function validateStackSequences($pushed, $popped) {
    $continue = true;
    $stack = array();
    $counter =0;
    while(isset($pushed[$counter])){
        if(isset($pushed[$counter])) array_push($stack,$pushed[$counter]); 
        while(isset($popped[0]) && end($stack)===$popped[0]){
            array_pop($stack);
            array_shift($popped);
        }
        $counter++;
    }
    
    for($i=count($stack)-1; $i>=0; $i--){
        if($stack[$i]!=$popped[0]){
            return false;
        }
        array_shift($popped);
    }
    
    return true;
}
}