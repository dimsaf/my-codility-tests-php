<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf & Martin Kysel
 * www.martinkysel.com/codility-maxcounters-solution/
 *
 */
function solution($N, $A) {
    if ((count($A) < 1) || (count($A) > 100000)) return 0;
    if (($N < 1) || ($N > 100000)) return 0;
    $max=$lastmax=0;
    $results=array();
    $results=array_fill(0, $N, 0);
    foreach ($A as $key=>$item){
        if (($item>=1)&&($item<=$N)){
            $results[$item-1]=max($results[$item-1], $lastmax);
            $results[$item-1]++;
            $max=max($results[$item-1], $max);
        } else if ($item===$N+1) {
            $lastmax=$max;
        }
    }
    for ($i=0; $i<$N; $i++) $results[$i]=max($results[$i], $lastmax);
//    print_r($results);
    return $results;
}
    
print_r(solution(5, [3,4,4,6,1,4,4]));
?>