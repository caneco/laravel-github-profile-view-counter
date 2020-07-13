<?php

namespace Caneco\GithubProfileViewCounter\Tests;

use Caneco\GithubProfileViewCounter\GithubProfileViewCounterServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('app.key', 'base64:hk7cBvtdbVdOgFAWG6qsZ3YWWguW9n4WrvebaiHvTjU=');

        $this->withFactories(__DIR__.'/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [
            GithubProfileViewCounterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        include_once __DIR__.'/../database/migrations/create_github_profile_view_counter_table.php.stub';
        (new \CreateGithubProfileViewCounterTable())->up();
    }
}
