# Uuid primary key

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wfeller/laravel-uuid-primary-key.svg?style=flat-square)](https://packagist.org/packages/wfeller/laravel-uuid-primary-key)
[![Total Downloads](https://img.shields.io/packagist/dt/wfeller/laravel-uuid-primary-key.svg?style=flat-square)](https://packagist.org/packages/wfeller/laravel-uuid-primary-key)

A trait to use ordered uuids as primary keys on your eloquent models.

## Installation

You can install the package via composer:

```bash
composer require wfeller/laravel-uuid-primary-key
```

## Usage

Add the following trait to your eloquent models:

``` php
class Car extends \Illuminate\Database\Eloquent\Model
{
    use \Wfeller\UuidPrimaryKey\HasUuidPrimaryKey;
    
    // ...
}
```

### Testing (todo)

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me instead of using the issue tracker.

## Credits

- [William](https://github.com/wfeller)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
