<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class Base64ExtensionRuntime implements RuntimeExtensionInterface
{
    public function base64Encode($value)
    {
        return base64_encode($value);
    }

    public function base64Decode($value)
    {
        return base64_decode($value);
    }
}
