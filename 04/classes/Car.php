<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    public function getLorem()
    {
        ?>
        <div>Hello, World!</div>
        <?php
    }

    public function getCarInfo()
    {
        return "<h3> About my Auto </h3>
                Brand: {$this->brand}<br>
                Count of wheels: {$this->wheels}<br>
                Speed: {$this->speed}<br>";
    }

    public function __destruct()
    {
        var_dump($this);
    }

}