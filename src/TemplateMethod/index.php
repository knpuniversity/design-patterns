<?php
declare(strict_types=1);

use KnpU\DesignPatterns\TemplateMethod\OrnithischiaType;
use KnpU\DesignPatterns\TemplateMethod\SaurischiaType;

require dirname(__FILE__, 3) . '/vendor/autoload.php';

if (!array_key_exists(1, $argv)) {
    throw new \RuntimeException('Type of dinosaur missing.');
}

$type = mb_strtolower($argv[1]);

if (!in_array($type, ['saurischia', 'ornithischia'])) {
    throw new \Exception(sprintf('Your type of dinosaur : "%s" is incorrect', $type));
}

if ($type === 'saurischia') {
    $dinosaurType = new SaurischiaType();
} elseif ($type === 'ornithischia') {
    $dinosaurType = new OrnithischiaType();
}

echo $dinosaurType->getInformations();
