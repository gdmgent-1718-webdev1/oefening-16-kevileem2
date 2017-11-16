<?php

namespace Kunstwerken;

interface AantalWoordenInterface {
    public function getWoorden(): int;
    public function setWoorden(int $woorden);
}