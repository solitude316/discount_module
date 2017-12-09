<?php
namespace Event;
class EventFactory
{
	public function __construct()
	{

	}

	public function getEventList($instant, $bill)
	{
		switch($instant) {
			case 'FirstTwo' : 
				return new \Event\package\FirstTwo($bill);
				break;
			case 'DiscountEveryBills' : 
				return new \Event\package\DiscountEveryBills($bill);
				break;
		}
	}
}
