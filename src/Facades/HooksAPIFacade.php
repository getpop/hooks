<?php

declare(strict_types=1);

namespace PoP\Hooks\Facades;

use PoP\Hooks\HooksAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class HooksAPIFacade
{
    public static function getInstance(): HooksAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('hooks_api');
    }
}
