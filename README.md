# Laravel 5.5/5.6 Front-end Preset For UIkit 3

[![Latest Stable Version](https://poser.pugx.org/tqt/laravel-uikit/v/stable)](https://packagist.org/packages/tqt/laravel-uikit) [![License](https://poser.pugx.org/tqt/laravel-uikit/license)](https://packagist.org/packages/tqt/laravel-uikit) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/ff2f3569f92047858650b41807eaa327)](https://www.codacy.com/app/cesaramirez/laravel-uikit?utm_source=github.com&utm_medium=referral&utm_content=twoquethree/laravel-uikit&utm_campaign=Badge_Grade) [![StyleCI](https://styleci.io/repos/19386515/shield?branch=master)](https://styleci.io/repos/110748648)

Preset for UIkit 3 scaffolding on new Laravel 5.5/5.6 project.

_Current version_: [**UIkit 3.0.0-rc.6**](https://getuikit.com)

## Screenshots

### Login

![login](https://user-images.githubusercontent.com/12446271/34858654-2e2d8c2a-f717-11e7-98cb-ab6904de89a0.png)

### Register

![register](https://user-images.githubusercontent.com/12446271/34858710-73aa482e-f717-11e7-987e-fa185b1b0556.png)

### Home

![home](https://user-images.githubusercontent.com/12446271/34858723-81beec08-f717-11e7-8336-5627c910074b.png)

## Usage

1.  Fresh install Laravel 5.5/5.6 and `cd` to your app.
2.  Install this preset via `composer require tqt/laravel-uikit`. Laravel 5.5/5.6 will automatically discover this package. No need to register the service provider.
3.  Use `php artisan preset uikit` for basic UIkit 3 preset. **OR** Use `php artisan preset uikit-auth` for basic preset, Auth route entry and UIkit 3 Auth views in one go. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4.  `yarn`
5.  `yarn dev` or `yarn watch`
6.  Configure your favorite database (mysql, sqlite, etc.)
7.  `php artisan migrate` to create basic user tables.
8.  `php artisan serve` (or equivalent) to run server and test preset.
