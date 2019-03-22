<?php

namespace Acme;

class Square extends Figure
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
        if ($this->width !== $this->length) {
            print "The height and the width need to be the shame";
        } else {
            $square = "
                   <!DOCTYPE html>
                   <html lang='nl'>
                   <head>
                       <title>Square</title>
                       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                       <style>
                           .square {
                               width: $this->width;
                               height: $this->length;
                               background-color: $this->color;
                           }
                       </style>
                   </head>
                   <body>
                       <h2>Square</h2>
                       <div class='square'></div>
                   </body>
                   </html>";
            return $square;
        }
    }
}