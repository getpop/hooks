<?php
namespace PoP\Hooks\Hooks;

use PoP\Hooks\Contracts\HooksAPIInterface;

class AbstractHook {
    protected $hooksAPI;
    public function __construct(
        HooksAPIInterface $hooksAPI
    ) {
        $this->hooksAPI = $hooksAPI;
    }
}
