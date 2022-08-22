<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $s = str_split($s);
        $output = true;
        $array = array(0,0,0);
        $turn=array();
        for($i=0;$i<count($s); $i++){
            if($s[$i]=="{"){
                $array[0]++;
                array_push($turn,"}");
            } 
            if($s[$i]=="}"){
                if(end($turn)=="}"){
                    array_pop($turn);
                }
                     $array[0]--;
            }
            
            if($s[$i]=="("){
                $array[1]++;
                array_push($turn,")");
            } 
            if($s[$i]==")"){
                if(end($turn)==")"){
                    array_pop($turn);                        
                   
                }
                 $array[1]--;
            }
            
            if($s[$i]=="["){
                $array[2]++;
                array_push($turn,"]");
            } 
            if($s[$i]=="]"){
                if(end($turn)=="]"){
                    array_pop($turn);
                }
                 $array[2]--;
            }
        }
        
        echo json_encode($turn);
        for($i=0;$i<count($array); $i++){
            if($array[$i]!=0){
                $output = false;
                break;
            }
        }
        for($i=0;$i<count($turn); $i++){
            if($turn[$i]!=""){
                $output = false;
                break;
            }
        }
        return $output;
    }
}
?>