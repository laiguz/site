<?php

namespace Tests\Feature\Livewire\Site\Layout;

use App\Livewire\Site\Layout\Seo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SeoTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Seo::class)
            ->assertStatus(200);
    }
}
