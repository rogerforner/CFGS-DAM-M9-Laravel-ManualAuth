# laravelManualAuth

Added Authentication Manually for a Laravel Project 

## Requisites

- PHP 5.6 or higher version.
- Composer.
- Npm.

## Install

- Clone via github:

``` bash
$ git clone git@github.com:rogerforner/laravelManualAuth.git
```

- Run composer install and npm install (or yarn) to install dependencies:

``` bash
$ composer install

$ npm install
```

- Copy .env.example to .env with your local configuration:

``` bash
$ cp .env.example .env
```

- Finally generate laravel project key:

``` bash
$ php artisan key:generate
```

## Database

Use "php artisan migrate:refresh" to run migrations with --seed option if you want to fill the db.

``` bash
$ php artisan migrate:refresh --seed
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email rogerforne@iesebre.com instead of using the issue tracker.

## Credits

- [Roger Forner Fabre][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/rogerforner
[link-contributors]: ../../contributors