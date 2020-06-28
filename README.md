# Uuid primary key

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wfeller/laravel-uuid-primary-key.svg?style=flat-square)](https://packagist.org/packages/wfeller/laravel-uuid-primary-key)
[![Total Downloads](https://img.shields.io/packagist/dt/wfeller/laravel-uuid-primary-key.svg?style=flat-square)](https://packagist.org/packages/wfeller/laravel-uuid-primary-key)
[![Plant Tree](https://img.shields.io/badge/dynamic/json?color=brightgreen&label=Plant%20Tree&query=%24.total&url=https%3A%2F%2Fpublic.offset.earth%2Fusers%2Ftreeware%2Ftrees)](https://plant.treeware.earth/wfeller/laravel-uuid-primary-key)
[![Buy us a tree](https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen?style=for-the-badge)](https://plant.treeware.earth/wfeller/laravel-uuid-primary-key)

A trait to use ordered uuids as primary keys on your eloquent models.

## Licence
This package is [Treeware](https://treeware.earth). If you use it in production, then we ask that you [**buy the world a tree**](https://plant.treeware.earth/wfeller/laravel-uuid-primary-key) to thank us for our work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees here [offset.earth/treeware](https://plant.treeware.earth/{vendor}/{package})

Read more about Treeware at [treeware.earth](http://treeware.earth)

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
    use \WF\UuidPrimaryKey\HasUuidPrimaryKey;
    
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
