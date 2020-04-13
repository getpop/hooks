<?php
declare(strict_types=1);

namespace PoP\Hooks;

use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Hooks\ContractImplementations\HooksAPI;
use PoP\Hooks\Facades\HooksAPIFacade;

class HooksAPITest extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        parent::__construct();
        $containerBuilder = ContainerBuilderFactory::getInstance();
        $containerBuilder
            ->register('hooks_api', HooksAPI::class);
    }
    /**
     * Test that applyFilter returns $value
     */
    public function testApplyFilters(): void
    {
        $hooksapi = HooksAPIFacade::getInstance();
        $this->assertEquals(
            'bar',
            $hooksapi->applyFilters('foo', 'bar')
        );
        $this->assertEquals(
            'baz',
            $hooksapi->applyFilters('foo', 'baz')
        );
    }
}
