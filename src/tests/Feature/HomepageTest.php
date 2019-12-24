<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    /**
     * The home page is returned with a HTTP 200 status code.
     *
     * @test
     * @return void
     */
    public function a_get_request_recieves_a_200_status_code()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * The home page renders the correct content.
     *
     * @test
     * @return void
     */
    public function a_get_request_to_root_returns_the_homepage()
    {
        $response = $this->get('/');

        $response->assertSee('<div class="column">');
    }
}
