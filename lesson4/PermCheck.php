<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * with 1st attempts! time = 9 min!
 * 
 * @author saf
 *
 */

function solution($A) {
    if ((count($A) < 1) || (count($A) > 100000)) return 0;
    sort($A);
    for($i=0; $i<count($A); $i++){
        if ($A[$i]!=$i+1) return 0;
    }
    return 1;
}

echo solution([4,1,3, 2]);
?>