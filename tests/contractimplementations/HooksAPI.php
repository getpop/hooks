<?php
declare(strict_types=1);
namespace PoP\Hooks\ContractImplementations;

class HooksAPI implements \PoP\Hooks\Contracts\HooksAPIInterface
{
    public function addFilter($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
    }
    public function removeFilter($tag, $function_to_remove, $priority = 10)
    {
    }
    public function applyFilters($tag, $value, ...$args)
    {
        return $value;
    }
    public function addAction($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
    }
    public function removeAction($tag, $function_to_remove, $priority = 10)
    {
    }
    public function doAction($tag, ...$args)
    {
    }
}
