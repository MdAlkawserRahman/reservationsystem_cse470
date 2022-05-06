<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HTTPjsonResponseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testJSONresponse(){
        $response = $this->get('/jsonreturn');
        $response
            ->assertStatus(201)
            ->assertJson([
                'name' => 'admin',
                'email'=>'samir@admin.com'
            ]);
    }
}
