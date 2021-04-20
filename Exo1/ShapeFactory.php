<?php


namespace App\Exo1;


class ShapeFactory

{
    /**
     *
     * Cette fonction permet de construire la bonne forme géographique selon le nombre de sommets
     * et les paramètres qui représenteront la taille des côtés (ou le rayon).
     *
     * Dans le cas d'un cercle la première valeur des paramètres est le rayon
     * Dans le cas rectangle les deux premières valeurs sont largeur et longueur
     *
     * @param int $nbTops
     * @param array $shapeParameters
     * @return ShapeInterface
     *
     */
    public function createShape(int $nbTops, array $shapeParameters): ShapeInterface
    {

        switch ($nbTops) {
            case 0:
                $result = new Circle($shapeParameters[0]);
                break;

            case 3:
                $result = new Triangle($shapeParameters[0], $shapeParameters[1], $shapeParameters[2]);
                break;

            case 4:
                /** Si largeur = longueur alors c'est un carré */
                if ($shapeParameters[0] == $shapeParameters[1]) {
                    $result = new Square($shapeParameters[0]);
                } /** Sinon c'est un rectangle */
                else {
                    $result = new Rectangle($shapeParameters[0], $shapeParameters[1]);
                }
                break;
        }

        return $result;

    }

}