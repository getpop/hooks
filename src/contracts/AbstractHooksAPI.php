<?php
namespace PoP\Hooks\Contracts;

abstract class AbstractHooksAPI implements HooksAPIInterface
{
    public function __construct()
    {
        HooksAPIFactory::setInstance($this);
    }
}
