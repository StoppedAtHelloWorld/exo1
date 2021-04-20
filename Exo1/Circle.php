<?php


namespace App\Exo1;


class Circle implements ShapeInterface
{
    /**
     * @var float
     */
    private $rayon;

    /**
     * Circle constructor.
     * @param float $rayon
     */
    public function __construct(float $rayon){
       $this->rayon = $rayon;
    }

    /**
     * @inheritDoc
     */
    public function getPerimeter(): float
    {
        return 2 * pi() * $this->rayon;
    }

    /**
     * @inheritDoc
     */
    public function getSurface(): float
    {
        return pi() * pow($this->rayon,2);
    }

    /**
     * @inheritDoc
     */
    public function toString(): string
    {
        return sprintf('Cercle dont la surface est %s cm² et le périmètre est %s cm.',$this->getSurface(),$this->getPerimeter());
    }
}