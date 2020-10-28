<?php
namespace fragment\comment;

use fragment\Fragment;

class SingleLineComment implements Fragment
{
    private string $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    function fragmentString(): string
    {
        return $this->value;
    }
}
