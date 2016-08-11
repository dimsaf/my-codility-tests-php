<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($A) {
    if ((count($A)<2)||(count($A)>100000)) return -1;
    $leftSum=$A[0];
    $rightSum=array_sum($A)-$leftSum; 
    $difference=abs($leftSum-$rightSum); 
    for ($i=2; $i<count($A); $i++) {
        $rightSum-=$A[$i-1];
        $leftSum+=$A[$i-1];
        $tmp=abs($leftSum-$rightSum); 
        if ($tmp<$difference) $difference=$tmp;
    }
    return $difference;
}
echo solution([3,1,2,4,3]);
?>