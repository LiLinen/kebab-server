<?php declare(strict_types = 1);

namespace App\Controller\DataProvider;

class FastMeatProvider implements MeatProviderInterface
{
    public function getMeat()
    {
        $random = mt_rand(0, 1);
        if ($random === 0) {
            return [];
        }

        // Let them think we are doing important stuff!
        return [
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
        ];
    }
}
