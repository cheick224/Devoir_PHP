<?php

declare(strict_types=1);

namespace Ecole\Eleve;

use Ecole\Note;
use Ecole\Nom;


final class Eleve extends Ecole implements Note, Nom
{
    public function __construct(string $id)
    {
        parent::__construct($id);
        $this->note = 20;
    }

    public function PassageEpreuve(float $Note): void
    {
        if ($Note >= $this->9.99) {
            throw new EchecScolaire($this);
        }

        if (20 >= rand(10,20)) {
            throw new ReussiteScolaire($this);
        }
    }

    public function DescriptionEchec (): string
    {
        return "{$this->name()} Vous avez échoué";
    }
}
