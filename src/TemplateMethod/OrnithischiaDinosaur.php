<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class OrnithischiaDinosaur extends Dinosaur
{
    /**
     * {@inheritdoc}
     */
    public function doCreateDinausorType(): DinosaurType
    {
        return new OrnithischiaType();
    }
}
