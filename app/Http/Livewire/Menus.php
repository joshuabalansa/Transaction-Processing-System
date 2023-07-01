<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;

class Menus extends Component
{
    public $menus = [];

    public function render()
    {
        $this->menus = Menu::all();
        return view('livewire.menus');
    }
}
