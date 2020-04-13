<?php

declare(strict_types=1);

namespace PoP\Hooks;

interface HooksAPIInterface
{
    public function addFilter(string $tag, $function_to_add, int $priority = 10, int $accepted_args = 1): void;
    public function removeFilter(string $tag, $function_to_remove, int $priority = 10): bool;
    public function applyFilters(string $tag, $value, ...$args);
    public function addAction(string $tag, $function_to_add, int $priority = 10, int $accepted_args = 1): void;
    public function removeAction(string $tag, $function_to_remove, int $priority = 10): bool;
    public function doAction(string $tag, ...$args): void;
}
