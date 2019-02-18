<?php

namespace Linio;

use Linio\Rule\RuleInterface;

class Challenge
{
	protected $rules = [];

	public function output()
	{
		$output = PHP_EOL;

		foreach (range(1, 15) as $number) {
			foreach ($this->rules as $rule) {
				if ($rule->isValid($number)) {
					$output .= (string) $rule . PHP_EOL;
					break;
				}
			}
		}

		return $output;
	}

	public function addRule(RuleInterface $rule)
	{
		$this->rules[] = $rule;
	}
}