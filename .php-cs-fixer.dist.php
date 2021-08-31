<?php
declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in(__DIR__ . '/src');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'class_attributes_separation' => ['elements' => ['property' => 'only_if_meta']],
    ])->setFinder($finder)
;
