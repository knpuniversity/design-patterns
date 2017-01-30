<?php
declare(strict_types=1);

use KnpU\DesignPatterns\TemplateMethod\SaurischiaType;

require dirname(__FILE__, 3) . '/vendor/autoload.php';

$saurischia = new SaurischiaType();
echo $saurischia->getInformations();
