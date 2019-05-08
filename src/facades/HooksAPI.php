<?php
namespace PoP\Hooks\Facades;

use PoP\Hooks\Contracts\HooksAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class HooksAPI
{
    public static function getInstance(): HooksAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('\PoP\Hooks\Contracts\HooksAPI');
    }
}
