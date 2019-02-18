<?php

namespace Linio\Rule;

class LinianoRule implements RuleInterface
{
	public function isValid(int $number)
	{
		return $number % 3 == 0 && $number % 5 == 0;
	}

	public function __toString()
	{
		return 'Liniano';
	}
}