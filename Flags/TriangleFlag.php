<?php

namespace HTL3R\Flags\Flags;

use HTL3R\Flags\Interfaces\FlagInterface as FlagInterface;

class TriangleFlag extends AbstractFlag implements FlagInterface {
    /**
    * Calculates the area of the flag
    * @return float Area of the flag in m²
    */
    public function calculateArea() : float
    {
        return ($this->width*$this->height)/2;
    }
}