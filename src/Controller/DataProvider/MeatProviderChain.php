<?php declare(strict_types = 1);

namespace App\Controller\DataProvider;

class MeatProviderChain implements MeatProviderInterface
{
    /**
     * @var MeatProviderInterface[]
     */
    private $providers;

    public function __construct($meatProviders)
    {
        $this->providers = $meatProviders;
    }

    public function getMeat()
    {
        foreach ($this->providers as $meatProvider) {
            $result = $meatProvider->getMeat();

            if (empty($result)) {
                continue;
            }

            return $result;
        }

        throw new \Exception('No Provider gave me data :(');
    }
}
