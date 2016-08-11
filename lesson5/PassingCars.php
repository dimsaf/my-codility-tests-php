<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($A) {
    $pairs=0;
    if ((count($A) < 1) || (count($A) > 100000)) return 0;
    $sum=array_sum($A);
    foreach($A as $key=>$item){
        if ($item===0) {
            $pairs+=$sum; 
            if ($pairs>1000000000) return -1;
        }else $sum--;
    }
    return $pairs;
}

echo solution([0,1,0,1,1]);
?>