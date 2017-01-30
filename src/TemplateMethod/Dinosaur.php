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
     *
     * @param string $type
     *
     * @throws \Exception
     */
    public function create(string $type)
    {
        // Primitive Operation
        $dinausorType = $this->doCreateDinausorType();

        if (!$this->isDinosaurType($type)) {
            throw new \Exception(sprintf('Your type of dinosaur : "%s" is incorrect for "%s"', $type, get_class($dinausorType)));
        }

        $this->dinosaurType = $dinausorType;
    }

    /**
     * Check if type of dinausor is accepted.
     *
     * Can be override.
     *
     * @param string $type
     *
     * @return bool
     */
    public function isDinosaurType(string $type)
    {
        if (!in_array($type, ['saurischia', 'ornithischia'])) {
            return false;
        }

        return true;
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
