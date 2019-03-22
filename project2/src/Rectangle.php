<?php

namespace Acme;

class Rectangle extends Figure
{
    private $width;
    private $length;

    public function __construct($color, $length, $width)
    {
        parent::__construct($color);
        $this->length = $length;
        $this->width = $width;
        $this->color = $color;
    }

    public function draw()
    {
        if ($this->width == $this->length) {
            print "The height and the width need to be different";
        } else {
            $rectangle = "
                   <!DOCTYPE html>
                   <html lang='nl'>
                   <head>
                       <title>Rectangle</title>
                       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                       <style>
                           .rectangle {
                               width: $this->width;
                               height: $this->length;
                               background-color: $this->color;
                           }
                       </style>
                   </head>
                   <body>
                       <h2>Rectangle</h2>
                       <div class='rectangle'></div>
                   </body>
                   </html>";
            return $rectangle;
        }
    }
}