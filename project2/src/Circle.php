<?php

namespace Acme;

class Circle extends Figure
{
    private $widthLine;
    private $heightLine;

    public function __construct($color, $heightLine, $widthLine)
    {
        parent::__construct($color);
        $this->heightLine = $heightLine;
        $this->widthLine = $widthLine;
        $this->color = $color;
    }

    public function draw()
    {
        if ($this->widthLine !== $this->heightLine) {
            print "The height and the width need to be the same";
        } else {
            $circle = "
                   <!DOCTYPE html>
                   <html lang='nl'>
                   <head>
                       <title>Circle</title>
                       <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                       <style>
                           .circle {
                               width: $this->widthLine;
                               height: $this->heightLine;
                               background-color: $this->color;
			       border-radius: 50%;
                           }
                       </style>
                   </head>
                   <body>
                       <h2>Circle</h2>
                       <div class='circle'></div>
                   </body>
                   </html>";
            return $circle;
        }
    }
}
