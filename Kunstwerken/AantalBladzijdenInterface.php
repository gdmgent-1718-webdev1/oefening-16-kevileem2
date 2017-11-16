<?php

namespace Kunstwerken;

interface AantalBladzijdenInterface {
    public function getBladzijden(): int;
    public function setBladzijden(int $bladzijden);
}