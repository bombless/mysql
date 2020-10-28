<?php
namespace fragment\primitive;

class HexDigit extends Primitive
{
    private int $value;

    function __construct(int $value)
    {
        $this->value = $value;
    }

    public function fragmentString(): string
    {
        return $this->value;
    }
}
