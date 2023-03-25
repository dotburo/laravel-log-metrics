<?php

namespace Dotburo\Molog\Tests;

use Dotburo\Molog\MologServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        //Factory::guessFactoryNamesUsing(
        //    fn (string $modelName) => 'Dotburo\\Molog\\Database\\Factories\\'.class_basename($modelName).'Factory'
        //);
    }

    protected function getPackageProviders($app)
    {
        return [
            MologServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        //$migration = include __DIR__. '/../database/migrations/2021_10_14_000000_create_molog_tables.php';
        //$migration->up();
    }
}
