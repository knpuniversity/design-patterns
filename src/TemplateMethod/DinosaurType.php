<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

abstract class DinosaurType
{
    abstract public function getType(): string;
    abstract public function getDescription(): string;

    public function getInformations(): string
    {
        return sprintf("Type: %s\nDescription: %s\n\n", $this->getType(), $this->getDescription());
    }
}
