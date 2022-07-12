<?php

namespace App\Interface;

interface AnimalInterface
{
    function feed(int $energy): int;

    function decline(): int;

    function isDie(): bool;

    function getType(): string;
}