<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($A) {
    if ((count($A)<0)||(count($A)>100000)) return -1;
    if (count($A)===0) return 1;
    sort($A, SORT_NUMERIC);
    for($i=0; $i<count($A); $i++){
        if ($A[$i]!=$i+1) return $i+1;
    }
    return count($A)+1;
}
echo solution([2,3,1,5]);
?>