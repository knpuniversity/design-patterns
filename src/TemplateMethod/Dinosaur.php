<?php
declare(strict_types=1);

namespace KnpU\DesignPatterns\TemplateMethod;

abstract class Dinosaur
{
    /**
     * @var DinosaurType
     */
    private $dinosaurType;

    /**
     * This is the template method.
     */
    public function create()
    {
        // Primitive Operation
        $this->dinosaurType = $this->doCreateDinausorType();
    }

    /**
     * @return DinosaurType
     */
    public function getDinosaurType(): DinosaurType
    {
        return $this->dinosaurType;
    }

    /**
     * Creation of type of dinausor
     *
     * @return DinosaurType
     */
    abstract public function doCreateDinausorType(): DinosaurType;
}
