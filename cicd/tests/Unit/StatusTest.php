<?php

namespace Tests\Feature;

use Tests\TestCase;

class StatusTest extends TestCase
{
    public function test_status_endpoint_returns_ok()
    {
        $response = $this->get('/status');

        $response->assertStatus(200)
                 ->assertJsonStructure(['status', 'time'])
                 ->assertJson(['status' => 'ok']);
    }
}
