<?php

namespace App\Twig\Runtime;

use App\Entity\Translation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\RuntimeExtensionInterface;

class TranslationExtensionRuntime implements RuntimeExtensionInterface
{
    private Request $request;

    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    public function getLocalizedTranslation(Translation $translation)
    {
        $locale = $this->request->getLocale();
        return $translation->getLocalizedTranslation($locale);
    }
}
