# PoP Hooks

<!--
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
-->

Contracts to implement hooks for PoP. The concept of a “hook” is the same [as in WordPress](https://developer.wordpress.org/plugins/hooks/): an “action” allows executing extra functionality, and a “filter” allows to modify a value.

## Install

Via Composer

``` bash
$ composer require getpop/hooks
```

([PoP](https://github.com/leoloso/PoP) must be installed)

## Usage

```php
use PoP\Hooks\Facades\HooksAPIFacade;

// Get an instance of the service
$hooksapi = HooksAPI::getInstance();

// Add a hook for an Action
$hooksapi->addAction($actionName, $functionName, $priority, $argNum);

// Add a hook for a Filter
$hooksapi->addFilter($filterName, $functionName, $priority, $argNum);

// Execute an Action
$hooksapi->doAction($actionName, $param1, $param2, ...);

// Execute a Filter
$filterValue = $hooksapi->applyFilters($filterName, $filterValue, $param1, $param2, ...);

// Remove an Action
$hooksapi->removeAction($actionName, $functionName, $priority, $argNum);

// Remove a Filter
$hooksapi->removeFilter($filterName, $functionName, $priority, $argNum);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@getpop.org instead of using the issue tracker.

## Credits

- [Leonardo Losoviz][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/getpop/hooks.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/getpop/hooks/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/getpop/hooks.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/getpop/hooks.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/getpop/hooks.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/getpop/hooks
[link-travis]: https://travis-ci.org/getpop/hooks
[link-scrutinizer]: https://scrutinizer-ci.com/g/getpop/hooks/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/getpop/hooks
[link-downloads]: https://packagist.org/packages/getpop/hooks
[link-author]: https://github.com/leoloso
[link-contributors]: ../../contributors
