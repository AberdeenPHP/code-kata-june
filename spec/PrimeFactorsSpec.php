<?php namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior {

    function it_returns_an_empty_array_for_1(){
        $this->generate(1)->shouldReturn([]);
    }

    function it_returns_2_for_2(){
        $this->generate(2)->shouldReturn([2]);
    }
    
    function it_returns_3_for_3(){
        $this->generate(2)->shouldReturn([2]);
    }
    
     function it_returns_22_for_4(){
        $this->generate(4)->shouldReturn([2,2]);
    }
    function it_returns_5_for_5(){
        $this->generate(5)->shouldReturn([5]);
    }
  
  }
