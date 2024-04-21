<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\TranslationExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TranslationExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('translation', [TranslationExtensionRuntime::class, 'getLocalizedTranslation']),
        ];
    }
}
