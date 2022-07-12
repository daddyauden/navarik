<?php

namespace App\Service;

use App\Service\Elephant;

class ElephantContainer
{
    public static string $type = "elephant";

    public array $items;

    public function __construct(int $num = 1)
    {
        for ($i = 0; $i < $num; $i++) {
            $this->items[$i] = new Elephant($i);
        }
    }
}