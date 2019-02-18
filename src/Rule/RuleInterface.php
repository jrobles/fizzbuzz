<?php

namespace Linio\Rule;

interface RuleInterface
{
	public function isValid(int $number);
	public function __toString();
}