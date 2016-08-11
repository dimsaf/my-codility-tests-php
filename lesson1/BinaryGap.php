<?php
/**
 * 
 * this solution get 100% on Codility.com!
 * 
 * @author saf
 *
 */
 function solution($N) {
		$gap=0;
		$nulls=explode("1", decbin($N)); 
		for ($i=1; $i<count($nulls)-1; $i++){
			if (strlen($nulls[$i])>$gap) $gap=strlen($nulls[$i]);
//			echo($nulls[$i].";");
		}
		return $gap;
}
echo solution(5);
?>