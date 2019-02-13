<?php
class Wheel implements JsonSerializable
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

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}