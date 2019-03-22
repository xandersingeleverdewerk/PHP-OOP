<?php

namespace project1b;

class Room
{
    private $length;
    private $width;
    private $height;

    public function setRoom($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getRoom()
    {
        return $this;
    }

    public function getVolume()
    {
        $volume = $this->width * $this->length * $this->height;
        return $volume;
    }

    public function getSize()
    {
        $size = $this->width * $this->length;
        return $size;
    }
}
