<?php
namespace PoP\Hooks\Contracts;

class HooksAPIFactory
{
    protected static $instance;

    public static function setInstance(HooksAPIInterface $instance)
    {
        self::$instance = $instance;
    }

    public static function getInstance(): ?HooksAPIInterface
    {
        return self::$instance;
    }
}
