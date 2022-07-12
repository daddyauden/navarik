<?php

namespace App\Service;

use App\Service\Monkey;

class MonkeyContainer
{
    public array $items;

    public function __construct(int $num = 1)
    {
        for ($i = 0; $i < $num; $i++) {
            $this->items[$i] = new Monkey($i);
        }
    }
}