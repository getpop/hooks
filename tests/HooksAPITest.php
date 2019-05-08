<?php
declare(strict_types=1);
namespace PoP\Hooks;

use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Hooks\ContractImplementations\HooksAPI;

class HooksAPITestCase extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        parent::__construct();
        $containerBuilder = ContainerBuilderFactory::getInstance();
        $containerBuilder
            ->register('\PoP\Hooks\Contracts\HooksAPI', HooksAPI::class);
    }
    /**
     * Test that applyFilter returns $value
     */
    public function testApplyFilters(): void
    {
        //\PoP\Hooks\Contracts\HooksAPIFactory::setInstance(new \PoP\Hooks\ContractImplementations\HooksAPI());
        //$hooksapi = \PoP\Hooks\Contracts\HooksAPIFactory::getInstance();
        $hooksapi = \PoP\Hooks\Facades\HooksAPI::getInstance();
        $this->assertEquals(
            'bar',
            $hooksapi->applyFilters('foo', 'bar')
        );
    }
}
