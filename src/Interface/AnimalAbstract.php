<?php

namespace App\Interface;

abstract class AnimalAbstract implements AnimalInterface
{
    public string $name;
    private static array $healthValue;

    public function __construct($name)
    {
        $this->setName($name);

        $this->setHealth(100);
    }

    private function setName(string $name)
    {
        $this->name = $this->getType() . "_" . $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setHealth(int $health): void
    {
        self::$healthValue[$this->getName()] = $health;
    }

    public function getHealth(): int
    {
        return self::$healthValue[$this->getName()];
    }

    public function feed(int $energy): int
    {
        $newHealth = $this->getHealth() + $energy;
        $this->setHealth(min($newHealth, 100));

        return $this->getHealth();
    }

    public function decline(): int
    {
        $energy = random_int(0, 20);

        $newHealth = $this->getHealth() - $energy;
        $this->setHealth(max($newHealth, 0));

        return $this->getHealth();
    }
}