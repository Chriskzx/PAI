<?php

namespace Application\Model;

class Data
{
    public function dzisiaj(): string
    {
        return date(format: 'Y-m-d H:i:s');
    }
}