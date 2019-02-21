<?php

namespace App;

class Challenge
{
    public function output()
    {
    	// Range through the 100 numbers
	foreach(range(1,100) as $i) {	
	    //echo $this->fizzbuzz($i);
	    echo "\n";
	}
        return null;
    }
}
