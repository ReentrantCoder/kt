<?php

class Car implements JsonSerializable
{
    private $make, $model;
    private $wheels = [];

    public function __construct($make, $model, $wheels)
    {
        $this->make = $make;
        $this->model = $model;
        $this->wheels = $wheels;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}