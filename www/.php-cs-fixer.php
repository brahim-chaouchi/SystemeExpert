<?php
$finder = PhpCsFixer\Finder::create()
    ->notPath('src/Symfony/Component/Translation/Tests/fixtures/resources.php')
    ->in(__DIR__.'/app')
    ->in(__DIR__ . '/tests');

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(true);
$config->setUsingCache(false);
return $config->setRules([
    '@PSR12' => true,
    'strict_param' => true,
    'array_syntax' => ['syntax' => 'short'],
    '@PHP82Migration' => true,
    '@PHP80Migration:risky' => false,
])
    ->setFinder($finder);
