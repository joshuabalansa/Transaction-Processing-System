<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;

class Menus extends Component
{
    public $menus = [];
    

    public function mount() {

        $this->menus = Menu::all();
    }

    public function render()
    {
        return view('livewire.menus');
    }

    public function optionOne($menuId) {
        ($menuId);
    }
}
