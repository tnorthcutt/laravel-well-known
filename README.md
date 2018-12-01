# A package to manage your .well-known URLs

## Supported URLs
- [change password](https://wicg.github.io/change-password-url/index.html)

## Installation

1. Add to your Composer file: `composer require tnorthcutt/laravel-well-known`

2. Publish the config file: `php artisan vendor:publish --provider="Tnorthcutt\WellKnownServiceProvider"`

3. Substitute your password change URL in `config/well-known.php`

4. That's it!