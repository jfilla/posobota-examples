<?php declare(strict_types=1);


namespace App\Models;


use Nette\SmartObject;
use Wavevision\DIServiceAnnotation\DIService;

/**
 * @DIService
 */
class ModelA
{
    use SmartObject;

    public function get(): string
    {
        return '42';
    }
}