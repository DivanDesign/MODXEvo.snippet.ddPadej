<?php
/**
 * ddPadej
 * @version 1.6 (2021-09-29)
 * 
 * @desc The snippet writes correct inflexions for the words connecting with numerals. 
 * 
 * @param $str {stringCommaSeparated} - String with inflexions separated by commas “v1,v2,v3”. Where “v1” — inflexion for 10; “v2” — for 1; “v3” — for 2. @required
 * @param $n {float} - Evaluating number. Default: 0.
 * 
 * @link https://code.divandesign.biz/modx/ddpadej
 * 
 * @copyright 2013–2021 DD Group {@link https://DivanDesign.biz }
 */

$str = explode(
	',',
	$str
);

if (!is_numeric($n)){
	$n = 0;
}

preg_match(
	'/^(.*)(\,|\.)(.*)$/',
	strval($n),
	$matches
);

if(!empty($matches)){
	return $str[2];
}

$mod = $n % 100;

if (
	$mod >= 10 &&
	$mod <= 20
){
	return $str[0];
}else{
	$mod = $n % 10;
	
	if (
		$mod >= 2 &&
		$mod <=4
	){
		return $str[2];
	}elseif ($mod == 1){
		return $str[1];
	}else{
		return $str[0];
	}
}
?>