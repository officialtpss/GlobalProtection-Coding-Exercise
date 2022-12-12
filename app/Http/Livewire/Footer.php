<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {

        $json = public_path('/json/components.json'); 
        $data = json_decode(file_get_contents($json), true);
        $this->footerMenu = $data[1]['contentElement']['items'];
        return view('livewire.footer');
    }
}
