<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> ed597b7 (first commit)
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
    public function test_the_application_returns_a_successful_response()
>>>>>>> ed597b7 (first commit)
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
