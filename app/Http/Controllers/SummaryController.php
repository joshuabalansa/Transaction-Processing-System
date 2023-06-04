<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class SummaryController extends Controller
{
    public function index() {

        $menus = Menu::all();
        return view('components.dashboard', compact('menus'));
    }
}
