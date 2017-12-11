<?php

namespace HTL3R\Flags\Flags;

abstract class AbstractFlag
{
    protected $name;
    protected $price;
    protected $width;
    protected $height;
    protected $color;

    /**
    * Flag constructor.
    * @param string $name Name of the flag
    * @param float $price Price of the flag
    * @param float $width Width of the flag in m
    * @param float $height Height of the flag in m
    * @param string $color Color as hex code
    */
    function __construct(string $name,float $price,float $width,
        float $height, string $color){
        $this->name = $name;
        $this->price = $price;
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }

    function __toString() : string
    {
    $rv =  <<<EOT
        Name: $this->name<br/>
        Preis: $this->price<br />
        Breite: $this->width<br />
        Höhe: $this->height<br />
        Farbe: <div style="width:10px;height:10px;background-color:$this->color"></div>
EOT;
        return $rv;
    }
}