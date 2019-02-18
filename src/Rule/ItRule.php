<?php

namespace Linio\Rule;

class ItRule implements RuleInterface
{
	public function isValid(int $number)
	{
		return $number % 5 == 0;
	}

	public function __toString()
	{
		return 'IT';
	}
}