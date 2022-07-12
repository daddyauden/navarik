<?php

namespace App\Service;

use App\Interface\AnimalAbstract;

class Elephant extends AnimalAbstract
{
    public static string $type = "elephant";

    public function isDie(): bool
    {
        return $this->getHealth() < 70;
    }

    public function getType(): string
    {
        return self::$type;
    }
}