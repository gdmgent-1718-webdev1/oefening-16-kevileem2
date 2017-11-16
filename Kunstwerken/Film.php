<?php

namespace Kunstwerken;

class Film extends KunstwerkenAbstract implements AfbeeldingInterface, DuurInterface
{
    public $afbeelding;
    public $duur;
    public function getAfbeelding(): string {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }
    public function getDuur(): string {
        return $this->duur;
    }

    public function setDuur(string $duur): void {
        $this->duur = $duur;
    }
}