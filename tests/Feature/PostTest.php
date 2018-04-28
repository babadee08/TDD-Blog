<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test To see that a get can visit the blog page
     */
    public function test_a_guest_can_access_blog_index()
    {
        $response = $this->get('/blog'); //make GET access to blog route

        $response->assertStatus(200); //assert http status return is 200
    }

    /**
     * Test to see that a guest can see posts
     */
    public function test_a_guest_can_see_post()
    {
        $post = factory(Post::class)->create();
        $response = $this->get('/blog');
        $response->assertSee($post->title);
    }

    public function test_a_guest_can_see_single_post()
    {
        // giving post data
        $post = factory('App\Post')->create();
        // when guest access blog/{id}
        $response = $this->get('/blog/'.$post->id);
        // expect to see post title
        $response->assertSee($post->title);
    }

}
