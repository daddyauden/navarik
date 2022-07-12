<?php

namespace App\Service;

use App\Interface\AnimalAbstract;

class Monkey extends AnimalAbstract
{
    public static string $type = "monkey";

    public function isDie(): bool
    {
        return $this->getHealth() < 30;
    }

    public function getType(): string
    {
        return self::$type;
    }
}