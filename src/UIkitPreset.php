<?php

namespace TQT\Presets\UIkit;

use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;
use Illuminate\Support\Arr;

class UIkitPreset extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();
        static::updateWelcomePage();
        static::removeNodeModules();
    }

    /**
     * Install the preset and auth views.
     *
     * @return void
     */
    public static function installAuth()
    {
        static::install();
        static::scaffoldAuth();
    }

    /**
     * Update the given package array.
     *
     * @param array $packages
     *
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'uikit' => '^3.0.0-rc.6',
        ] + Arr::except($packages, ['bootstrap-sass', 'bootstrap', 'jquery', 'popper.js']);
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/uikit-stubs/sass/app.scss', resource_path('assets/sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/uikit-stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/uikit-stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));
    }

    /**
     * Export the welcome view.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        (new Filesystem())->delete(resource_path('views/welcome.blade.php'));
        copy(__DIR__.'/uikit-stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    /**
     * Export the authentication views.
     *
     * @return void
     */
    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());
        file_put_contents(
            base_path('routes/web.php'),
            "\nAuth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        (new Filesystem())->copyDirectory(__DIR__.'/uikit-stubs/views', resource_path('views'));
    }

    /**
     * Compiles the HomeController stub.
     *
     * @return string
     */
    protected static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(__DIR__.'/uikit-stubs/controllers/HomeController.stub')
        );
    }
}
