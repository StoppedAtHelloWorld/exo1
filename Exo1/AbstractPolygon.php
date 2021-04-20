<?php


namespace App\Exo1;


abstract class AbstractPolygon implements ShapeInterface
{

    /**
     * @var int
     */
    static private $nbPolygon = 0;

    /**
     * @var string
     */
    protected $polygonTypeName;


    public function __construct(string $polygonTypeName){
        $this->polygonTypeName = $polygonTypeName;
        AbstractPolygon::$nbPolygon += 1;
    }

    /**
     * @return int
     */
    public static function getNbPolygon(): int
    {
        return AbstractPolygon::$nbPolygon;
    }

    /**
     * @inheritDoc
     */
    public function toString(): string
    {
        return sprintf('%s dont la surface est %s cm² et le périmètre est %s cm.',$this->polygonTypeName,$this->getSurface(),$this->getPerimeter());
    }
}