<?php
require_once 'Wheel.php';

class Car implements JsonSerializable
{
    private $make, $model;
    private $wheels = [];

    public function __construct( string $make, string $model, array $wheels)
    {
        $this->make = $make;
        $this->model = $model;
        $this->wheels = $wheels;
    }

    public function addWheel( Wheel $wheel): void
    {
        $this->wheels[] = $wheel;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

$wheel = new Wheel(Wheel::FRONT_LEFT);
$car = new Car("Honda", "Civic", [$wheel]);
echo json_encode($car);