<?php declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SauceController extends AbstractController
{
    /**
     * @Route("/sauces", name="get_sauces", methods={"GET"})
     *
     * @return JsonResponse
     */
    public function getSauces(): JsonResponse
    {
        return new JsonResponse([
            [
                'name' => 'Garlic',
                'description' => 'Avoid Vampires!',
            ],
            [
                'name' => 'Spicy',
                'description' => 'Unleash Fires From Hell!',
            ],
        ]);
    }
}
