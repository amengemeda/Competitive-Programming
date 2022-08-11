<?php
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {

        $string = array();
        for($i=1; $i<=$n; $i++){
            $divisbleByFive = $i%5==0 ? true:false;
            $divisbleByThree = $i%3==0 ? true:false;
            if($divisbleByFive && $divisbleByThree){
                $string[($i-1)] = "FizzBuzz";
            }elseif($divisbleByThree){
                $string[($i-1)] = "Fizz";
            }elseif($divisbleByFive){
                $string[($i-1)] = "Buzz";
            }else{
                $string[($i-1)] = (string)$i;
            }
        }
        return $string;

    }
}

?>