<?php

declare(strict_types=1);

namespace PoP\Hooks;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\Root\Component::class,
        ];
    }
}
