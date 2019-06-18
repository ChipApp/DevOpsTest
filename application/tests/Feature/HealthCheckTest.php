<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    public function test_health_check_returns_200()
    {
        $response = $this->get('/api/health');

        $response->assertStatus(200);
    }
}
