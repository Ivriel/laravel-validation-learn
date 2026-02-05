<?php

namespace Tests\Feature;

use Tests\TestCase;

class FormControllerTest extends TestCase
{
    public function test_login_failed()
    {
        $response = $this->post('/form/login', [
            'username' => '',
            'password' => '',
        ]);
        $response->assertStatus(400);
    }

    public function test_login_success()
    {
        $response = $this->post('/form/login', [
            'username' => 'admin',
            'password' => 'rahasia',
        ]);
        $response->assertStatus(200);
    }
}
