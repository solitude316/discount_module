<?php
$base_dir = __DIR__;
spl_autoload_register(function ($class_name) use ($base_dir) {
	$path = str_replace("\\", "/", $class_name);
	echo "requiring {$base_dir}/{$path}.php";
	echo PHP_EOL;
	require_once("{$base_dir}/{$path}.php");
});

$event_list = [
    'DiscountEveryBills',
	'FirstTwo',
	'FirstTwo',
];

$bill = new Bill(1000);
$billAgent = new \Event\BillAgent($bill);

foreach ($event_list as $val) {
	var_dump($val);
	$billAgent =  \Event\EventFactory::getEventList($val, $billAgent);
	var_dump('allowMultipleEvents');
	var_dump($billAgent->allowMultipleEvents());

	if (!$billAgent->allowMultipleEvents()) {
		break;
	}
	var_dump($billAgent->getPrice());
}

$discount_list = $billAgent->getDiscount();
var_dump($discount_list);
echo 'Final : ' . PHP_EOL;
var_dump($billAgent->getPrice());
