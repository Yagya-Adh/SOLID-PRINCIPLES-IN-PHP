<?php

class Driver
{
    protected $car;


    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    public function go()
    {

        $this->car->driver();
    }
}