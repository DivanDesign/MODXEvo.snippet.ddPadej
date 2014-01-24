<?php
/**
 * ddPadej.php
 * @version 1.5 (2010-05-21)
 * 
 * @desc The snippet writes correct inflexions for the words connecting with numerals. 
 * 
 * @param str {comma separated string} - String with inflexions separated by commas “v1,v2,v3”. Where “v1” — inflexion for 10; “v2” — for 1; “v3” — for 2. @required
 * @param n {integer} - Evaluating number. @required
 * 
 * @link http://code.divandesign.ru/modx/ddpadej/1.5
 * 
 * @copyright 2012, DivanDesign
 * http://www.DivanDesign.biz
 */

$str = split(',',$str);
$mod = $n % 100;
if (($mod >= 10) && ($mod <=20)) return $str[0];
else{
	$mod = $n % 10;
	if (($mod >= 2) && ($mod <=4)) return $str[2];
	elseif ($mod == 1) return $str[1];
	else return $str[0];
}
?>