<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class SummaryController extends Controller
{
    public function index() {

        $menuCount = Menu::all()->count();
        return view('components.dashboard', compact('menuCount'));
    }
}
