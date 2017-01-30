<?php
declare(strict_types=1);

use KnpU\DesignPatterns\TemplateMethod\OrnithischiaDinosaur;
use KnpU\DesignPatterns\TemplateMethod\SaurischiaDinosaur;

require dirname(__FILE__, 3) . '/vendor/autoload.php';

if (!array_key_exists(1, $argv)) {
    throw new \RuntimeException('Type of dinosaur missing.');
}

$type = mb_strtolower($argv[1]);

if (!in_array($type, ['saurischia', 'lizard', 'ornithischia'])) {
    throw new \RuntimeException(sprintf('Your type of dinosaur : "%s" is incorrect', $type));
}

if (in_array($type, ['saurischia', 'lizard'])) {
    $dinosaur = new SaurischiaDinosaur();
} elseif ($type === 'ornithischia') {
    $dinosaur = new OrnithischiaDinosaur();
}

$dinosaur->create($type);

echo $dinosaur->getDinosaurType()->getInformations();
