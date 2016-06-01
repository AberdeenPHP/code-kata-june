<?php namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior {

	// public function is_it_working(){
	// 	$this->execute();
	// }

	function it_returns_an_empty_array_for_1()
	{
		$this->generate(1)->shouldReturn([]);
	}
}
