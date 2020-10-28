<?php
namespace fragment\primitive;

class UserVar extends Primitive
{
    private string $value;

    function __construct(string $value)
    {
        $this->value = $value;
    }

    public function fragmentString(): string
    {
        return $this->value;
    }
}
