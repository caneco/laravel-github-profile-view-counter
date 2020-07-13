# Laravel GitHub Profile Visit Counter

<p align="center">
    <img src="/art/socialcard.png" width="1280" title="Social Card Laravel GitHub Profile View Counter">
    <p align="center">
        <a href="https://packagist.org/packages/caneco/laravel-github-profile-view-counter"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/caneco/laravel-github-profile-view-counter"></a>
        <a href="https://packagist.org/packages/caneco/laravel-github-profile-view-counter"><img alt="License" src="https://img.shields.io/packagist/l/caneco/laravel-github-profile-view-counter"></a>
    </p>
</p>

This package will allows you to track Github profile views and display them in your profile readme, for free.

This package was inspired Artem Golubin's post [**How to track and display profile views on GitHub**](https://rushter.com/blog/github-profile-markdown/).

## Installation

You can install the package via composer:

```bash
composer require caneco/laravel-github-profile-view-counter
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Caneco\GithubProfileViewCounter\GithubProfileViewCounterServiceProvider" --tag="migrations"
php artisan migrate
```

## Usage

Just visit `yourdomain.com/github-profile-view-counter.svg`, you should see your badge with `visits++`.

## Cheating

You can always fill your table with a lot of rows to make yourself famous! **But, play nice** 😉.

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Caneco](https://github.com/caneco)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Thanks

Thanks to Spatie to make damn easy to create a new package. Please do check their [`spatie/package-skeleton-laravel`](https://github.com/spatie/package-skeleton-laravel).
