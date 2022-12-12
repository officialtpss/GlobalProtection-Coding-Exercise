<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Catalog extends Component
{
    public function render()
    {
        $json = public_path('/json/catalog.json'); 
        $data = json_decode(file_get_contents($json), true);
        $this->pageTitle = $data['pageTitle'];
        $this->pageType = $data['pageType'];
        $this->ProductCatalog = $data;
 
        return view('livewire.catalog');
    }
}
