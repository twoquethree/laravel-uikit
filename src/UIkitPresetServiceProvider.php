<?php

namespace TQT\Presets\UIkit;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class UIkitPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('uikit', function ($command) {
            UIkitPreset::install();
            $command->info('UIkit 3 scaffolding installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('uikit-auth', function ($command) {
            UIkitPreset::installAuth();
            $command->info('UIkit 3 scaffolding with auth views installed successfully.');
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
