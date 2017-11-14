# Laravel 5.5.x Front-end Preset For Bulma

[![Latest Stable Version](https://poser.pugx.org/tqt/laravel-uikit/v/stable)](https://packagist.org/packages/tqt/laravel-uikit)
[![License](https://poser.pugx.org/tqt/laravel-uikit/license)](https://packagist.org/packages/tqt/laravel-uikit)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ff2f3569f92047858650b41807eaa327)](https://www.codacy.com/app/cesaramirez/laravel-uikit?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=twoquethree/laravel-uikit&amp;utm_campaign=Badge_Grade)
[![StyleCI](https://styleci.io/repos/19386515/shield?branch=master)](https://styleci.io/repos/110748648)

Preset for Bulma scaffolding on new Laravel 5.5.x project.

*Current version*: [**UIkit 3.0.0-Beta.35**](https://getuikit.com)

## Usage
1. Fresh install Laravel 5.5.x and `cd` to your app.
2. Install this preset via `composer require tqt/laravel-uikit`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset uikit` for basic UIkit 3 preset. **OR** Use `php artisan preset uikit-auth` for basic preset, Auth route entry and UIkit 3 Auth views in one go. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install`
5. `npm run dev`
6. Configure your favorite database (mysql, sqlite etc.)
7. `php artisan migrate` to create basic user tables.
8. `php artisan serve` (or equivalent) to run server and test preset.
