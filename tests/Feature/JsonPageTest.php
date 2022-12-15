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
     * testHomePageResponse
     *
     * @return void
     */
    public function testHomePageResponse()
    {
       
        $response = $this->get('/home');
        $response->assertStatus(200);
    }
    
    /**
     * testProductCatalogPageResponse
     *
     * @return void
     */
    public function testProductCatalogPageResponse()
    {
       
        $response = $this->get('/product');
        $response->assertStatus(200);
    }
    
    /**
     * testProductDetailPageResponse
     *
     * @return void
     */
    public function testProductDetailPageResponse()
    {
       
        $response = $this->get('/catalog');
        $response->assertStatus(200);
    }
    
    /**
     * testNotFoundPageResponse
     *
     * @return void
     */
    public function testNotFoundPageResponse()
    {
       
        $response = $this->get('/not-found');
        $response->assertStatus(200);
    }


    /**
     * testJsonPagesResponse
     *
     * @return void
     */
    public function testJsonPagesResponse()
    {
        $response = Livewire::test(Page::class)->call('render');
 
        $response->assertStatus(200);
    }

}
