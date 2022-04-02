<?php

namespace Tests\Unit\Models;

use App\Models\Repository;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_belogns_to_user()
    {
        $repository = Repository::factory()->create();
        // dd($repository->user)
        $this->assertInstanceOf(User::class, $repository->user);

    }
}
