<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($A, $B, $K) {
    $inc=0;
    if (($A>$B) || ($A < 0 || $A > 2000000000) || ($B < 0 || $B > 2000000000) || ($K < 1 || $K > 2000000000)) return -1;
    if ($B===0) return 1;
    if ($K>$B) return 0;
    if (($A%$K===0)||($B%$K===0)||($K>$A)) $inc=1; 
    if ($A===0) return (int)floor($B/$K)+$inc;
    return (int)floor(($B-max($A,$K))/$K)+$inc;
}

echo solution(6,11,2);
?>
