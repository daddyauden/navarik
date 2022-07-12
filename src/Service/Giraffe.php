<?php

namespace App\Service;

use App\Interface\AnimalAbstract;

class Giraffe extends AnimalAbstract
{
    public static string $type = "giraffe";

    public function isDie(): bool
    {
        return $this->getHealth() < 50;
    }

    public function getType(): string
    {
        return self::$type;
    }
}