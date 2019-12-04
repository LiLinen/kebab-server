<?php declare(strict_types = 1);

namespace App\Controller;

use App\Controller\DataProvider\MeatProvider;
use App\Controller\DataProvider\MeatProviderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MeatController extends AbstractController
{
    private $provider;

    /**
     * @param MeatProviderInterface $meatProvider
     */
    public function __construct(MeatProviderInterface $meatProvider)
    {
        $this->provider = $meatProvider;
    }

    /**
     * @Route("/meats", name="get_meats", methods={"GET"})
     *
     * @return JsonResponse
     */
    public function getMeats(): JsonResponse
    {
        return new JsonResponse($this->provider->getMeat());
    }
}
