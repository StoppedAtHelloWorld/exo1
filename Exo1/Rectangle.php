<?php


namespace App\Exo1;


class Rectangle extends AbstractPolygon
{
    /**
     * @var float
     */
    protected $width;
    /**
     * @var float
     */
    protected $height;

    /**
     * Rectangle constructor.
     * @param float $height
     * @param float $width
     */
    public function __construct(float $height, float $width)
    {
        parent::__construct('Rectangle');
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @inheritDoc
     */
    public function getPerimeter(): float
    {
        return (2 * $this->height + 2 * $this->width);
    }

    /**
     * @inheritDoc
     */
    public function getSurface(): float
    {
        return $this->width * $this->height;
    }

}