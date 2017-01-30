<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

class OrnithischiaType extends DinosaurType
{
    public function getType(): string
    {
        return "Hey! I'm Ornithischia";
    }

    public function getDescription(): string
    {
        return "I'm characterized by a pelvic structure similar to that of birds.";
    }
}
