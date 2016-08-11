<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */
 // эта функция набрала 66% из-за bad performance (time complexity is not O(N), it is O(N**2))
 // зато использовано много интересных фукций для работы с массивами
function solution($A) {
    $num=0;
    if (empty($A)) return 0;
    while (count($A)>0){
        $num=array_shift($A);
        $pairplace=array_search($num, $A); 
        if ($pairplace===false) return $num; else array_splice($A, $pairplace, 1);
//        print_r($A); echo(";");
    }
}
// this solution get 100% on Codility.com!
function solution1($A) {
    $num=0;
    if (empty($A)) return 0;
    sort($A, SORT_NUMERIC); 
    for ($i=0; $i<count($A); $i=$i+2){
        if ($A[$i]!=$A[$i+1]) return $A[$i]; 
//        print_r($A); echo(";");
    }
}
echo solution1([9, 3, 9, 3, 9,7,9]);
?>