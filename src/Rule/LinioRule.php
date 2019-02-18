<?php

namespace Linio\Rule;

class LinioRule implements RuleInterface
{
	public function isValid(int $number)
	{
		return $number % 3 == 0;
	}

	public function __toString()
	{
		return 'Linio';
	}
}