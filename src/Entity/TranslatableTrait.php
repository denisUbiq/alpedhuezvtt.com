<?php

namespace App\Entity;


trait TranslatableTrait
{
    public function getLocalizedTranslation(string $locale): ?string
    {
        return $this->translation->getLocalizedTranslation($locale);
    }
}