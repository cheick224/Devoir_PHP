<?php

declare(strict_types=1);

namespace Ecole\Eleve;

use Ecole\PeutEchouer;

class EchecScolaire extends \Exception
{
    private $eleve;

    public function __construct(PeutEchouer $eleve)
    {
        parent::__construct("{$eleve->DescriptionEchec()}\n");
        $this->eleve = $eleve;
    }
}
