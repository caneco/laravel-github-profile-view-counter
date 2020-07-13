<?php

namespace Caneco\GithubProfileViewCounter;

use Caneco\GithubProfileViewCounter\Tests\TestCase;

class GithubProfileViewCounterTest extends TestCase
{

    /** @test */
    public function test_it_shows_right_badge()
    {
        $this->get('/github-profile-view-counter.svg')
            ->assertViewIs('github-profile-view-counter::badge');
    }

    /** @test */
    public function test_it_shows_right_headers()
    {
        $this->get('/github-profile-view-counter.svg')
            ->assertOk()
            ->assertHeader('Content-Type', 'image/svg+xml')
            ->assertHeader('Cache-Control', 'max-age=0, must-revalidate, no-cache, no-store, private');
    }

    /** @test */
    public function test_it_increments_visits()
    {
        $this->get('/github-profile-view-counter.svg')
            ->assertSeeText("Profile views\n        1", false);

        $this->get('/github-profile-view-counter.svg')
            ->assertSeeText("Profile views\n        2", false);

        $this->get('/github-profile-view-counter.svg')
            ->assertSeeText("Profile views\n        3", false);
    }
}
