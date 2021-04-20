<?php


namespace App\Controller;

use App\Exo1\Circle;
use App\Exo1\Rectangle;
use App\Exo1\Triangle;
use App\Exo1\ShapeFactory;
use App\Exo1\Square;
use App\Exo1\AbstractPolygon;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class Exo1Controller extends AbstractController
{

    /**
     * @Route("/exo", name="exo")
     * @return JsonResponse
     *
     */

    public function exo1(): JsonResponse
    {
        $shapeFactory = new shapeFactory();
        $shapes[] = $shapeFactory->createShape(0, [0 => 3]);
        $shapes[] = $shapeFactory->createShape(4, [0 => 4, 1 => 4]);
        $shapes[] = $shapeFactory->createShape(4, [0 => 2, 1 => 3]);
        $shapes[] = $shapeFactory->createShape(4, [0 => 4, 1 => 2]);
        $shapes[] = $shapeFactory->createShape(4, [0 => 3, 1 => 3]);
        $shapes[] = $shapeFactory->createShape(3, [0 => 3, 1 => 4, 2 => 5]);

        /**
         * @var $sumPerimeters float
         */
        $sumPerimeters = 0;

        /**
         * @var $sumSurfaces float
         */
        $sumSurfaces = 0;

        foreach ($shapes as $shape) {
            $sumPerimeters += $shape->getPerimeter();
            $sumSurfaces += $shape->getSurface();
            $shapesNames[] = $shape->toString();
        }

        $response = new JsonResponse();
        $response->setData([
            'Liste objets' => $shapesNames,
            'Somme des périmètres' => $sumPerimeters,
            'Somme des surfaces' => $sumSurfaces,
            'Nombre de polygones' => AbstractPolygon::getNbPolygon()
        ]);

        return $response;
    }
}