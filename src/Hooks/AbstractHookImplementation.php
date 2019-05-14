<?php
namespace PoP\Hooks\Hooks;

use PoP\Hooks\Facades\HooksAPI;

abstract class AbstractHookImplementation
{
    protected $hooksAPI;

    public function __construct()
    {
        $this->hooksAPI = HooksAPI::getInstance();
    }
}
