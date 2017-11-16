<?php

namespace Kunstwerken;

class Boek extends KunstwerkenAbstract implements AantalBladzijdenInterface, AantalWoordenInterface
{
    public $woorden;
    public $bladzijden;
    public function getWoorden(): int {
        return $this->woorden;
    }

    public function setWoorden(int $woorden): void {
        $this->woorden = $woorden;
    }
    public function getBladzijden(): int {
        return $this->bladzijden;
    }

    public function setBladzijden(int $bladzijden): void {
        $this->bladzijden = $bladzijden;
    }
}