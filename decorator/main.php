<?php
$base_dir = __DIR__;
spl_autoload_register(function ($class_name) use ($base_dir) {
	$path = str_replace("\\", "/", $class_name);
	echo "requiring {$base_dir}/{$path}.php";
	echo PHP_EOL;
	require_once("{$base_dir}/{$path}.php");
});


$expresso = new Expresso;

$baverage = new Mocha($expresso);
$baverage2 = new Mocha($baverage);
$baverage3 = new Mocha($baverage2);
$baverage4 = new Mocha($baverage3);

var_dump($baverage->cost());
var_dump($baverage2->cost());
var_dump($baverage3->cost());
var_dump($baverage4->cost());
