<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */

function solution($S, $P, $Q){
    $A = $C = $G = $T = 0;
    $results = array();
    $quantaties = array();
    $quantaties[-1]="0000"; 
    if ((strlen($S) < 1) || (strlen($S) > 100000))
        return 0;
    if ((count($P) < 1) || (count($P) > 50000))
        return 0;
    if ((count($Q) < 1) || (count($Q) > 50000))
        return 0;
    for ($i = 0; $i < strlen($S); $i++) {
        switch (substr($S, $i, 1)) {
            case 'A':
                $A++; 
                break;
            case 'C':
                $C++;
                break;
            case 'G':
                $G++;
                break;
            case 'T':
                $T++;
                break;
        }
        $quantaties[$i]=$A."|".$C."|".$G."|".$T; 
    } 
//    print_r($quantaties);
    $right=$left=array();
    for ($i = 0; $i < count($P); $i++) {
        $right=explode("|", $quantaties[$Q[$i]]); print_r($right);
        $left=explode("|", $quantaties[$P[$i]-1]); print_r($left);
        if (($right[0]-$left[0])!=0) $results[$i]=1;
        elseif (($right[1]-$left[1])!=0) $results[$i]=2;
        elseif (($right[2]-$left[2])!=0) $results[$i]=3;
        else $results[$i]=4;
    }
    return $results;
}

print_r(solution('CAGCCTA', [2,5,0], [4,5,6]));

?>
