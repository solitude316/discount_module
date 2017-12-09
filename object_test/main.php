<?php
class Foo 
{
	private $price = 0;

	public function __construct($price = 0)
	{
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price = 0)
	{
		$this->price = $price;
	}
}

class Bar
{
	private $foo;

	public function __construct(Foo $foo)
	{
		$this->foo = $foo;
	}

	public function setPrice($price=0)
	{
		$this->foo->setPrice($price);
	}

	public function getPrice()
	{
		return $this->foo->getPrice();
	}
}


$fff = new Foo(100);
var_dump($fff->getPrice());
$bar1 = new Bar($fff);
var_dump($bar1->getPrice());
var_dump('----------------------');
$bar1->setPrice(200);
$fff->setPrice(201);
var_dump($fff->getPrice());
var_dump($bar1->getPrice());
var_dump('----------------------');

$bar2 = new Bar($fff);
$bar2->setPrice(301);
$bar1->setPrice(101);
var_dump($fff->getPrice());
var_dump($bar1->getPrice());
var_dump($bar2->getPrice());
