<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_hello_message()
    {
        // Send a GET request to the /hello route
        $response = $this->getJson('/api/hello');

        // Assert that the response status is 200
        $response->assertStatus(200);

        // Assert that the response message equals 'Hello, World!'
        $response->assertJson([
            'message' => 'Hello, World!'
        ]);
    }
}
