<?php
function going($n) 
{
 	$fact = function ($n) {
 		$t = 1;
 		for ($i=1; $i <= $n; $i++) { 
 			$t *= $i;
 		}
 		return $t;
 	};
 	$fs = 1 / $fact($n);
 	$r  = 0;
 	for ($i=1; $i <= $n; $i++) { 
 		$r += $fact($i);
 	}
 	$fix = function ($dt) {
 		$dt = explode(".", (string) $dt);
 		return sizeof($dt) === 2 ? (float) ($dt[0].".".substr($dt[1], 0, 6)) : (float) $dt[0];
 	};
 	return $fix($fs * $r);
}