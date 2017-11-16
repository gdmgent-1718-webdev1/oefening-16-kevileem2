<?php

namespace Kunstwerken;

class Gedicht extends KunstwerkenAbstract implements AantalWoordenInterface
{
    public $woorden;
    public function getWoorden(): int {
        return $this->woorden;
    }

    public function setWoorden(int $woorden): void {
        $this->woorden = $woorden;
    }
}