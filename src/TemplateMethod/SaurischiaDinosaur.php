<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class SaurischiaDinosaur extends Dinosaur
{
    /**
     * {@inheritdoc}
     */
    public function isDinosaurType(string $type)
    {
        return in_array($type, ['lizard', 'saurischia']);
    }

    /**
     * {@inheritdoc}
     */
    public function doCreateDinausorType(): DinosaurType
    {
        return new SaurischiaType();
    }
}
