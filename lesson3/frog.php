<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */
function solution($X, $Y, $D) {
    return (int)ceil(($Y - $X) / $D);
}
echo solution(10,85,30);
?>