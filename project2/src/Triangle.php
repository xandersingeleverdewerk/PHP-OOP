<?php

namespace Acme;

class Triangle extends Figure
{
    private $width1;
    private $width2;
    private $heightLine;

    public function __construct($color, $width1, $width2, $heightLine)
    {
        parent::__construct($color);
        $this->color = $color;
        $this->width1 = $width1;
        $this->width2 = $width2;
        $this->heightLine = $heightLine;
    }

    public function draw()
    {
        $triangle = "
                   <!DOCTYPE html>
                   <html lang='nl'>
                   <head>
                       <title>triangle</title>
                       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                       <style>
                           .triangle {
                               width: 0;
                               height: 0;
                               border-left: $this->width1 solid transparent;
                               border-right: $this->width2 solid transparent;
                               border-bottom: $this->heightLine solid $this->color;
                           }
                       </style>
                   </head>
                   <body>
                       <h2>Triangle</h2>
                       <div class='triangle'></div>
                   </body>
                   </html>";
        return $triangle;
    }
}
