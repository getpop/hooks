<?php
declare(strict_types=1);
namespace PoP\Hooks\ContractImplementations;

class HooksAPI implements \PoP\Hooks\HooksAPIInterface
{
    public function addFilter(string $tag, $function_to_add, int $priority = 10, int $accepted_args = 1): void
    {
    }
    public function removeFilter(string $tag, $function_to_remove, int $priority = 10): bool
    {
        return true;
    }
    public function applyFilters(string $tag, $value, ...$args)
    {
        return $value;
    }
    public function addAction(string $tag, $function_to_add, int $priority = 10, int $accepted_args = 1): void
    {
    }
    public function removeAction(string $tag, $function_to_remove, int $priority = 10): bool
    {
        return true;
    }
    public function doAction(string $tag, ...$args): void
    {
    }
}
