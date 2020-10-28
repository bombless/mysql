<?php
namespace fragment\primitive;

class BitNum extends Primitive
{
    private int $value;

    function __construct(int $value)
    {
        $this->value = $value;
    }

    function fragmentString(): string
    {
        return $this->value;
    }
}
