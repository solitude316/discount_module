<?php
class Bill
{
	private $price = null;

	public function __construct($price)
	{
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}
	
}
