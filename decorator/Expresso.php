<?php
class Expresso extends Beverage
{
	public function __construct()
	{
		$this->description = "Expresso";
	}

	public function cost()
	{
		return 1.99;
	}
}
