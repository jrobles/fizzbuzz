<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ChallengeTest extends TestCase
{
    public function testIsPrintingCorrectOutput()
    {
        $expectedOutput = <<<TXT
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
TXT;

        $challenge = new Challenge();

        $this->assertEquals($expectedOutput, $challenge->output());
    }
}
