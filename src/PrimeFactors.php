<?php

class PrimeFactors {

	/**
	 * @param $number
	 * @return array
	 */
	public function generate($number)	
	{

        $primes =[];
        
        $i=2;
        
        while($i<$number){   
        
            while ($number % $i == 0){
        
                $primes[]=$i;
            
                $number /= $i;
            
            }
	
        $i++;
        
        }
	
        if ($number > 1) {
            $primes[] = $number;
        }
        
        return $primes;
        
	}


}
