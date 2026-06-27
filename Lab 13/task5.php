<?php
function analyzeNumber(int $n){
    if ($n>0){
        return "$n is positive";
    } elseif ($n<0){
        return "$n is negative";
    } else{
        return "$n is zero";
    }
}
echo analyzeNumber(1)."<br>";
echo analyzeNumber(-1)."<br>";
echo analyzeNumber(0);
?>