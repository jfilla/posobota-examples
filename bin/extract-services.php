<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Wavevision\DIServiceAnnotation\Configuration;
use Wavevision\DIServiceAnnotation\Runner;

Runner::run(
    new Configuration(__DIR__ . '/../app', __DIR__ . '/../app/config/services.neon')
);