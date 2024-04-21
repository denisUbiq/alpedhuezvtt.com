<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\JsonExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class JsonExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('json_decode', [JsonExtensionRuntime::class, 'jsonDecode']),
        ];
    }
}
