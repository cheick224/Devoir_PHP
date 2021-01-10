<?php

declare(strict_types=1);

namespace Ecole\Classe;

use Ecole\Eleve;

abstract class Classe implements Eleve
{
    protected $Note;
    protected $Nom;

    public function __construct(string $id)
    {
        $this->note = rand(00, 20);
        $this->Nom= $id;
    }

    public function Note(): float
    {
        return $this->Note;
    }

    public function getNom(): string
    {
        return $this->Nom;
    }


}
