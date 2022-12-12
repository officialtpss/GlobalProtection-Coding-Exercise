<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        $json = public_path('/json/product.json'); 
        $data = json_decode(file_get_contents($json), true);
       // echo "<pre>";print_r($data);echo "</pre>";
       $this->pageTitle = $data['pageTitle'];
       $this->pageType = $data['pageType'];
        $this->ProductDetail = $data['contentElement']['values'];

        return view('livewire.product');
    }
}
