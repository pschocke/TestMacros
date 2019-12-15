# Laravel Test-Macros

This Package is inspired by Spaties [Laravel Collections](https://github.com/spatie/laravel-collection-macros) package and extends Laravels default Testing methods with a few useful macros.

## Installation

Via Composer

``` bash
$ composer require pschocke/testmacros --dev
```

The package will automatically register itself.

## Macros

### TestResponse

- [`assertResource`](#assertResource)

#### `assertResource`

Asserts that a response is a resource

```php
$model = factory(App\Model::class)->create();

$this->json('GET', '/route/to/resource')->assertResource(new ModelResource($model));
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

`TODO`

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email patrick@ausbildung-ms.de instead of using the issue tracker.

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pschocke/testmacros.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pschocke/testmacros.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pschocke/testmacros/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/pschocke/testmacros
[link-downloads]: https://packagist.org/packages/pschocke/testmacros
[link-travis]: https://travis-ci.org/pschocke/testmacros
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/pschocke
[link-contributors]: ../../contributors
