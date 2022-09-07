<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function decodeString($s) {
        $stack = array();
        $string = str_split($s);
        for($i=0; $i<count($string) ;$i++){
            if($string[$i]=="]"){
                // echo "round:".$i;
                $char = "";
                while(end($stack)!="["){
                    $char = array_pop($stack).$char;
                }
                array_pop($stack);
                $number = "";
                while(is_numeric(end($stack))&& count($stack)>0){
                    $number = array_pop($stack).$number;
                }
                if($number=="") $number=0;
                while((int)$number>0){
                    array_push($stack,$char);
                    $number--;
                }
            }else{
                array_push($stack,$string[$i]);    
            }
        }
        $output = implode("",$stack);
        
        return $output;
    }
}

?>