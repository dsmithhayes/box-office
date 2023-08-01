<?php

// Build the DI Container

require_once 'vendor/autoload.php';

$builder = new DI\ContainerBuilder();
$builder->enableCompilation(__DIR__ . '/tmp');
$builder->writeProxiesToFile(true, __DIR__ . '/tmp/proxies');

/**
 * Let the Exception be thrown so any build required will fail
 */
$builder->build();
