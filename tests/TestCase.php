<?php

namespace InvadersXX\FilamentJetstreamProfile\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use InvadersXX\FilamentJetstreamProfile\FilamentJetstreamProfileServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'InvadersXX\\FilamentJetstreamProfile\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentJetstreamProfileServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-jetstream-profile_table.php.stub';
        $migration->up();
        */
    }
}
