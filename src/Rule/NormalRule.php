<?php

namespace Linio\Rule;

class NormalRule implements RuleInterface
{
	protected $lastNumber;

	public function isValid(int $number)
	{
		$this->lastNumber = $number;

		return true;
	}

	public function __toString()
	{
		return (string) $this->lastNumber;
	}
}