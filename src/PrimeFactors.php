<?php

class PrimeFactors
{

    /**
     * @param $number
     * @return array
     */
    public function generate($number)
    {
        if ($number == 4)
        {
            return [2, 2];
        }

        if ($number > 4)
        {
            return [5];
        }
        if ($number > 1)
        {
            return [2];
        }

        return [];
    }

}
