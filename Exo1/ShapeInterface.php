<?php


namespace App\Exo1;


interface ShapeInterface
{

    /**
     *
     * Calcul le périmètre d'une shape
     *
     * @return float
     */
    public function getPerimeter(): float;

    /**
     *
     * Calcul la surface d'une shape
     *
     * @return float
     */
    public function getSurface(): float;

    /**
     *
     * Retourne les attributs d'une shape en strinng
     *
     * @return string
     */
    public function toString(): string;


}