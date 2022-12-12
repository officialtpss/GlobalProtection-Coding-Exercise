<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $json = public_path('/json/components.json'); 
        $data = json_decode(file_get_contents($json), true);
        
        $this->headerMenu = $data[0]['contentElement']['items'];

        return view('livewire.header');
    }
}
