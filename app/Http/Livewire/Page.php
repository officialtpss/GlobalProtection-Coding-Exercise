<?php

namespace App\Http\Livewire;

use Exception;
use Livewire\Component;
use Illuminate\Http\Request;


class Page extends Component
{
    public function render()
    {   
       
  
        $urlSegment = collect(request()->segments())->last();

        $data = retreive($urlSegment); 
        $file = public_path("/json/$urlSegment.json"); 
        if(file_exists($file) || $urlSegment == ''){
            $this->pageTitle = $data['pageTitle'];
            $this->pageType = $data['pageType'];

            if($urlSegment == "product" ){
                $this->ProductDetail = $data['contentElement']['values'];
                return view('livewire.product');
            }else if($urlSegment == "catalog" ){
                $this->ProductCatalog = $data;
                return view('livewire.catalog');
            }else if($urlSegment == "home" || $urlSegment == "" ){
                $this->homeData = $data;
                return view('livewire.home');
            }
        }else{
            $this->error = $data;
            return view('livewire.not-found');
        }

    }

}
