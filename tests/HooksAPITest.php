<?php

declare(strict_types=1);

namespace PoP\Hooks;

class HooksAPITestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that applyFilter returns $value
     */
    public function testApplyFilters(): void
    {
        \PoP\Hooks\Contracts\HooksAPIFactory::setInstance(new \PoP\Hooks\ContractImplementations\HooksAPI());
        $hooksapi = \PoP\Hooks\Contracts\HooksAPIFactory::getInstance();
        $this-> assertEquals(
            'bar',
            $hooksapi->applyFilters('foo', 'bar')
        );
    }
}
