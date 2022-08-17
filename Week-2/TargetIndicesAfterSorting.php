class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */

function targetIndices($nums, $target) {
    $size = count($nums);
    
    #sorting the array using selection
    $sorted = false;
    while(!$sorted) {
      $sorted = true;
      for($i=0; $i < $size; $i++) {
        if($nums[$i] < $nums[$i-1]) {
          $temp = $nums[$i];
          $nums[$i] = $nums[$i-1];
          $nums[$i-1] = $temp;
          $sorted = false;
        }
      }
    }
    
    foreach($nums as $num){echo $num;}
    $returnArray = array();
    for($i=0; $i< $size; $i++){
        if($nums[$i]==$target){
            array_push($returnArray,$i);
            if($nums[($i+1)]!=$target) break;
        }
    }
    return $returnArray;
}


}