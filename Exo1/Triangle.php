<?php


namespace App\Exo1;


class Triangle extends AbstractPolygon
{
    /**
     * @var float
     */
    private $sideA;
    /**
     * @var float
     */
    private $sideB;
    /**
     * @var float
     */
    private $sideC;


    /**
     * Triangle constructor.
     * @param float $sideA
     * @param float $sideB
     * @param float $sideC
     */
    public function __construct(float $sideA, float $sideB, float $sideC)
    {
        parent::__construct('Triangle');
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    /**
     * @inheritDoc
     */
    public function getPerimeter(): float
    {
        return ($this->sideA + $this->sideB + $this->sideC);
    }

    /**
     * @inheritDoc
     */
    public function getSurface(): float
    {
        /** Formule d'Héron */
        $p = 0.5 * ($this->sideA + $this->sideB + $this->sideC);
        return sqrt($p * ($p - $this->sideA) * ($p - $this->sideB) * ($p - $this->sideC));
    }

}