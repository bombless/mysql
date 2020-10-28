<?php
namespace fragment\primitive;

class IntegerNum extends Primitive
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
