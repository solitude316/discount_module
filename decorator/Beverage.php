<?php

abstract class Beverage
{
	private $description = 'Unknown Beverage';

	public function getDescription()
	{
		return $this->description;
	}
}
