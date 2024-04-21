<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\Base64ExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Base64Extension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('base64_encode', [Base64ExtensionRuntime::class, 'base64Encode']),
            new TwigFilter('base64_decode', [Base64ExtensionRuntime::class, 'base64Decode']),
        ];
    }
}
