<?php

namespace Acme;

abstract class Figure
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}