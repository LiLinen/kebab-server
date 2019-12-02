<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MeatController extends AbstractController
{
    /**
     * @Route("/meats", name="get_meats", methods={"GET"})
     *
     * @return JsonResponse
     */
    public function getMeats(): JsonResponse
    {
        return new JsonResponse([
            [
                'name' => 'Chicken',
                'description' => 'Kuk Kuk Daaak!',
            ],
            [
                'name' => 'Pork',
                'description' => 'Kriu kriu kriu!',
            ],
            [
                'name' => 'Pork & Veal',
                'description' => 'Lorem Ipsum',
            ]
        ]);
    }
}
