<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */
 function solution($A, $K) {
    if ($K<0) $K=0;
    if ($K>100) $K=100;
    if (empty($A)) return $A;
    for ($j=1; $j<=$K; $j++){
        for($i=count($A)-1; $i>=0; $i--){
            $A[$i+1]=$A[$i];
        }
        $A[0]=array_pop($A);
    }
	return $A;
}
print_r(solution([3, 8, 9, 7, 6],3));
?>