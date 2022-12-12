<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $json = public_path('/json/home.json'); 
        $data = json_decode(file_get_contents($json), true);
        $this->homeData = $data;
        return view('livewire.home');
    }
}
