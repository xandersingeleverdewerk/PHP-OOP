<?php
/**
 * Created by PhpStorm.
 * User: xrobb
 * Date: 16-2-2019
 * Time: 20:18
 */

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