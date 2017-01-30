<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class OrnithischiaDinosaur
{
    public function doCreateDinausorType(): OrnithischiaType
    {
        return new OrnithischiaType();
    }
}
