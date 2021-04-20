<?php


namespace App\Exo1;


class Square extends Rectangle
{
    public function __construct(float $width)
    {
        parent::__construct($width, $width);
        $this->polygonTypeName = 'Carré';
    }
}