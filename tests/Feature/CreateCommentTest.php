<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCommentTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Browse main page
     *
     * @return void
     */
    public function test_browse_main_page()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    /**
     * A guest cannot create a comment
     *
     * @return void
     */
    public function test_guests_may_not_create_comment()
    {

        $this->withExceptionHandling();

        $this->post(route('comments'))
            ->assertRedirect(route('dashboard'));

    }



}
