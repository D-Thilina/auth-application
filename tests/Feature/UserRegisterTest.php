<?php

namespace Tests;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    public function test_user_registration()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Kalpana',
            'email' => 'kalpana@gmail.com',
            "password" => "12345678",
        ]);

        dd($response->content());
    }

}
