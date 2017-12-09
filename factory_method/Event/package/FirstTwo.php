<?php
namespace Event\package;

class FirstTwo extends \Event\CondimentDecorator implements \Event\EventInterface
{
	public function __construct(\Event\BillAgent $bill)
	{
		$this->bill = $bill;
	}

	public function allowMultipleEvents()
	{
		return true;
	}

    public function qualifyBill()
	{

	}

	public function getPrice()
	{
		return $this->bill->getPrice() * 0.9;
	}

	public function getDiscount()
	{
		$discountList = [];
		if ($this->bill instanceof \Event\CondimentDecorator) {
			$discountList = $this->bill->getDiscount();
		}
		$discountList[] = [
			'eventType'	=> preg_replace("/^.*\\\(\w+)$/", "$1", __CLASS__),
			'discount'	=> $this->getPrice(),
		];
		return $discountList;
	}

	public function revert()
	{

	}
}
