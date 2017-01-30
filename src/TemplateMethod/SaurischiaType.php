<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class SaurischiaType extends DinosaurType
{
    public function getType(): string
    {
        return "Hey! my order is Saurischia";
    }

    public function getDescription(): string
    {
        return "It's meaning 'lizard'";
    }
}
