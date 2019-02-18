<?php

namespace Linio;

use PHPUnit\Framework\TestCase;
use Linio\Rule\LinianoRule;
use Linio\Rule\LinioRule;
use Linio\Rule\ItRule;
use Linio\Rule\NormalRule;

class ChallengeTest extends TestCase
{
	public function testIsPrintingCorrectOutput()
	{
		$expectedOutput = '
1
2
Linio
4
IT
Linio
7
8
Linio
IT
11
Linio
13
14
Liniano
';

		$challenge = new Challenge();
		$challenge->addRule(new LinianoRule());
		$challenge->addRule(new LinioRule());
		$challenge->addRule(new ItRule());
		$challenge->addRule(new NormalRule());
		
		$this->assertEquals($expectedOutput, $challenge->output());
	}
}