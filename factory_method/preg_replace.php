<?php
	$string = 'Event\package\FirstTwo';
	$string2 = preg_match("/^(.*)\\\(\w+)$/", $string, $match);
	$string2 = preg_replace("/^.*\\\(\w+)$/", "$1", $string);

	var_dump($match);
	var_dump($string2);
