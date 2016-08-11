<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($A) {
    $current=0;
    if ((count($A) < 1) || (count($A) > 100000)) return 0;
    sort($A); 
    foreach ($A as $key=>$item){
        if ($item>0){
            if ($item===$current+1) $current=$item; else if($item>$current+1) return $current+1;
        }
    }
    return $current+1;
}

echo solution([1,3,6,4,1,2]);
?>