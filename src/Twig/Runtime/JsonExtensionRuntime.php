<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class JsonExtensionRuntime implements RuntimeExtensionInterface
{
    public function jsonDecode($value)
    {
        return json_decode($value);
    }
}
