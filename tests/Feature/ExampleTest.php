<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example_will_return_an_exception()
    {
        $response = $this->postJson("/subscribe", []);

        $response->assertStatus(500);
    }
}
