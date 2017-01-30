<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class SaurischiaDinosaur
{
    public function doCreateDinausorType(): SaurischiaType
    {
        return new SaurischiaType();
    }
}
