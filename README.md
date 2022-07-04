
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package weight-conversions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mininduhewawasam/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/mininduhewawasam/weight-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mininduhewawasam/weight-conversions/run-tests?label=tests)](https://github.com/mininduhewawasam/weight-conversions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mininduhewawasam/weight-conversions/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mininduhewawasam/weight-conversions/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mininduhewawasam/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/mininduhewawasam/weight-conversions)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/weight-conversions.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/weight-conversions)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require mininduhewawasam/weight-conversions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="weight-conversions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="weight-conversions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="weight-conversions-views"
```

## Usage

```php
$weightConversions = new Mininduhewawasam\WeightConversions();
echo $weightConversions->echoPhrase('Hello, Mininduhewawasam!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/mininduhewawasam/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Minindu Hewawasam](https://github.com/mininduhewawasam)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
