<?php

namespace Kunstwerken;

class Beeldhouwwerk extends KunstwerkenAbstract implements AfbeeldingInterface, GewichtInterface
{
    public $afbeelding;
    public $gewicht;

    public function getAfbeelding(): string {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }
    public function getGewicht(): float {
        return $this->gewicht;
    }

    public function setGewicht(float $gewicht): void {
        $this->gewicht = $gewicht;
    }
}