<?php
namespace Event;

interface EventInterface
{
	public function allowMultipleEvents();

	public function getPrice();

	//public function qualifyBill();

	public function getDiscount();

	public function revert();
}
