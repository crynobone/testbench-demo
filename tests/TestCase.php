<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    /**
     * Get Application's base path.
     *
     * @return string
     */
    public static function applicationBasePath()
    {
        return __DIR__.'/../';
    }
}
