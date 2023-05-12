<?php

class Car
{
    public $collor;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function getCarInfo()
    {
        echo "<h3> About my Auto </h3>
                Brand: {$this->brand}<br>
                Count of wheels: {$this->wheels}<br>
                Speed: {$this->speed}<br>";
    }
}