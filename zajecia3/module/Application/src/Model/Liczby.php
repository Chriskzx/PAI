<?php

namespace Application\Model;

class Liczby
{

    public function generuj()
    {
        $parzyste = [];
        $nieparzyste = [];

        for($i = 0; $i <= 100; ++$i)
        {
            $number = rand(0, 1000);
            if($number % 2 == 0)
            {
                array_push($parzyste, $number);
            }
            else
            {
                array_push($nieparzyste, $number);
            }
        }
        sort($parzyste);
        sort($nieparzyste);
        return [$parzyste, $nieparzyste];
    }
}