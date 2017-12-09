<?php
class Mocha extends CondimentDecorator
{
	private $beverage = null;

	public function __construct(Beverage $beverage)
	{
		$this->beverage = $beverage;
	}

	public function getDescription2() 
	{
		return $this->beverage->getDescription()  . " , Mocha";
	}

	public function cost()
	{
		return $this->beverage->cost() + 0.2;
	}
}
