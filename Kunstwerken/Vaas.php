<?php

namespace Kunstwerken;

class Vaas extends KunstwerkenAbstract implements GewichtInterface
{
    public $gewicht;
    public function getGewicht(): float {
        return $this->gewicht;
    }

    public function setGewicht(float $gewicht): void {
        $this->gewicht = $gewicht;
    }
}