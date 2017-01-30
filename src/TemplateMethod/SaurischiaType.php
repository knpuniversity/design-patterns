<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class SaurischiaType
{
    public function getType(): string
    {
        return "Hey! my order is Saurischia";
    }

    public function getDescription(): string
    {
        return "It's meaning 'lizard'";
    }

    public function getInformations(): string
    {
        return sprintf("Type: %s\nDescription: %s\n\n", $this->getType(), $this->getDescription());
    }
}
