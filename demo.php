<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */
function solution($A) {
    if ((count($A)==0)||(count($A)>100000)) return -1;
    $leftSum=$rightSum=0;
    for ($i=1;$i<count($A);$i++) $rightSum+=$A[$i];
    if ($rightSum==0) return 0;
    for ($i=1;$i<count($A);$i++) {
        $rightSum-=$A[$i];
        $leftSum+=$A[$i-1];
        if ($rightSum==$leftSum) return $i;
    }
    return -1;
}
echo solution([-1, 3, -4, 5, 1, -6, 2, 1]);
?>
