<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_guest_can_access_blog_index()
    {
        $response = $this->get('/blog'); //make GET access to blog route

        $response->assertStatus(200); //assert http status return is 200
    }
}
