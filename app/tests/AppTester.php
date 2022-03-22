<?php

use Faker\Factory as Faker;

class AppTester extends TestCase {

    protected $fake;

    public function __construct()
    {
        $this->fake = Faker::create();
    }

    public function setUp()
    {
        parent::setUp();

        $this->app['artisan']->call('migrate');
    }

    protected function getJson($uri)
    {
        return $this->call('GET', $uri);
    }
}