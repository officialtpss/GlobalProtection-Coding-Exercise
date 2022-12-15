<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use App\Helpers\Helpers as common;
use App\Http\Livewire\Page;
use Livewire\Livewire;

class JsonPageTest extends TestCase
{


    /**
     * A basic test example.
     *
     * @return void
     */

    public function testJsonPagesResponse()
    {
        $response = Livewire::test(Page::class)->call('render');
        $response->assertStatus(200);
    }

}
