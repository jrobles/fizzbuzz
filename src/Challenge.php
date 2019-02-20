<?php

namespace App;

class Challenge
{
    public function output()
    {
		// Range tthrough the 100 numbers
		foreach(range(1,100) as $i) {	
			echo $this->_fizzBuzz($i);
			echo "\n";
		}
        return null;
    }

	// Working version but does not meet the requirements.
	private function _fizzBuzz($i) 
	{
			// If 3 or 5 output FizzBuzz
			if ($i % 3 == 0 && $i % 5 == 0) {
				return 'FizzBuzz';
			} elseif ($i % 3 == 0) {
				return 'Fizz';
			} elseif ($i % 5 == 0) {
				return 'Buzz';
			} else {
				return $i;	
			}
	}

}
