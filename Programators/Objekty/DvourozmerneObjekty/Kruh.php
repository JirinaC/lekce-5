<?php
class Kruh
{
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getRadius()
	{
		return $this->radius;
	}

	public function ziskejObsah()
	{
		return $this->radius * $this->radius * pi();
	}
}