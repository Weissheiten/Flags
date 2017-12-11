<?php

namespace HTL3R\Flags\Flags;

use HTL3R\Flags\Interfaces\FlagInterface as FlagInterface;

class RectangleFlag extends AbstractFlag implements FlagInterface {
    public function __construct($name, $price, $width, $height, $color)
    {
        parent::__construct($name, $price, $width, $height, $color);
    }

    /**
     * Calculates the area of the flag
     * @return float Area of the flag in m²
     */
    public function calculateArea() : float
    {
        return $this->width*$this->height;
    }
}
