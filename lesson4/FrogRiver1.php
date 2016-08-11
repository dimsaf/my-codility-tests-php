<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($X, $A){
    if ((count($A) < 1) || (count($A) > 100000))
        return - 1;
    if ($X < 1 || $X > 100000)
        return - 1;
    asort($A, SORT_NUMERIC);  //print_r($A);
    $leaf = 0;
    $sec = $sec1=-1;
    foreach ($A as $key => $item) {
        if ($item === $leaf+1) {
            if ($sec<$sec1) $sec=$sec1;
            if ($item===$X+1) return $sec;
            $sec1=$key;
            $leaf = $item;
        } else if ($item === $leaf){
            if ($sec1>$key) $sec1=$key;
            $leaf = $item;
        }else return - 1;
        //echo "sec=".$sec."\n";
        //echo "sec1=".$sec1."\n";
    }
    if ($sec<$sec1) $sec=$sec1;
    if ($item===$X) return $sec; else return -1;
}
echo "final solution=".solution(5, [1, 3, 1, 4, 2, 3, 5, 4, 2, 1]);

?>