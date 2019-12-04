<?php declare(strict_types = 1);

namespace App\Controller\DataProvider;

class MeatProvider implements MeatProviderInterface
{
    public function getMeat()
    {
        // Let them think we are doing important stuff!
        sleep(5);

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
