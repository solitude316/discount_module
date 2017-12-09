<?php
namespace Event;

class BillAgent
{
	private $bill = null;
	private $event_list = [];

	public function __construct(\Bill $bill)
	{
		$this->bill = $bill;
	}
	
	public function getBill()
	{
		return $this->bill;
	}

	public function getPrice()
	{
		return $this->bill->getPrice();
	}
}
