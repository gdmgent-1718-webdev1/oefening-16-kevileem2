<?php

namespace Kunstwerken;

interface GewichtInterface {
    public function getGewicht(): float;
    public function setGewicht(float $gewicht);
}