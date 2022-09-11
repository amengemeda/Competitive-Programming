<?php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return String
     */
    function findKthBit($n, $k) {
        $string = $this->concat("0",$n-1);
        echo $string;
        return substr($string,$k-1,1);
    }
    function concat($s,$n){
        if($n==0) return $s."";
        return $this->concat($s."1".strrev($this->inver($s)),$n-1); 
    }
    function inver($s){
        $array = str_split($s);
        for($i=0; $i<strlen($s);$i++){
            if($array[$i]==1){
                $array[$i]=0;
            }else{
                $array[$i]=1;
            }
        }
        return implode("",$array);
    }

}
?>