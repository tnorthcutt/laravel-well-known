# A package to manage your .well-known URLs

## What?
[Standards, yo](https://www.ietf.org/rfc/rfc5785.txt)

## Supported URLs
- [change password](https://wicg.github.io/change-password-url/index.html)

## Installation

1. Add to your Composer file: `composer require tnorthcutt/laravel-well-known`

2. Publish the config file: 
```
php artisan vendor:publish --provider="Tnorthcutt\WellKnown\WellKnownServiceProvider"
```

3. Substitute your password change URL in `config/well-known.php`

4. That's it!
