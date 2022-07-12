<?php

namespace App\Service;

use App\Service\ElephantContainer;
use App\Service\GiraffeContainer;
use App\Service\MonkeyContainer;

class Zoo
{
    private array $container;

    public function __construct()
    {
        $this->addAnimals([
            new ElephantContainer(5),
            new GiraffeContainer(5),
            new MonkeyContainer(5)
        ]);
    }

    public function addAnimal($animal)
    {
        $this->container[] = $animal;
    }

    public function addAnimals($animals)
    {
        for ($i = 0, $len = count($animals); $i < $len; $i++) {
            $this->addAnimal($animals[$i]);
        }
    }

    public function feed()
    {
        for ($i = 0, $len = count($this->container); $i < $len; $i++) {
            $energy = random_int(10, 25);
            foreach ($this->container[$i]->items as $item) {
                $item->feed($energy);
            }
        }
    }

    public function decline()
    {
        for ($i = 0, $len = count($this->container); $i < $len; $i++) {
            foreach ($this->container[$i]->items as $item) {
                $item->decline();
            }
        }
    }

    public function checkStatus()
    {
        $status = array();

        for ($i = 0, $len = count($this->container); $i < $len; $i++) {
            foreach ($this->container[$i]->items as $item) {
                $status[$item->getType()][] = [
                    "name" => $item->getName(),
                    "health" => $item->getHealth(),
                    "isDie" => $item->isDie()
                ];
            }
        }

        return $status;
    }
}