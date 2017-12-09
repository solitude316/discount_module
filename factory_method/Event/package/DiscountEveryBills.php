<?php
namespace Event\package;

class DiscountEveryBills extends \Event\CondimentDecorator implements \Event\EventInterface
{
	public function __construct(\Event\BillAgent $bill)
	{
		$this->bill = $bill;
	}

	public function allowMultipleEvents()
	{
		return false;
	}

	public function getPrice(2)
	{
		return 1;
	}

	public function getDiscount()
    {
        //var_dump("instanceof \Event\CondimentDecorator");
        //var_dump(($this->bill instanceof \Event\CondimentDecorator));
        $discountList = [];
        if ($this->bill instanceof \Event\CondimentDecorator) {
            $discountList = $this->bill->getDiscount();
        }
        $discountList[] = [
            'eventType' => preg_replace("/^.*\\\(\w+)$/", "$1", __CLASS__),
            'discount'  => $this->getPrice(),
        ];
        return $discountList;
    }

	public function revert()
	{

	}
}
