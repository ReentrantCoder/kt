<?php
class Wheel
{
    const FRONT_LEFT = 1;
    const FRONT_RIGHT = 2;
    const BACK_RIGHT = 3;
    const BACK_LEFT = 4;

    private $position;

    public function __construct( $position )
    {
        $this->position = $position;
    }

    public function __toString()
    {
        return $this->position . PHP_EOL;
    }
}

echo new Wheel(Wheel::FRONT_LEFT) . PHP_EOL;