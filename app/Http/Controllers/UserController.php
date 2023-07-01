<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class UserController extends Controller
{
    
    public function index() {
        $menus = Menu::where('category', 0)->get();
        
        return view('user.index', compact('menus'));
    }
}
