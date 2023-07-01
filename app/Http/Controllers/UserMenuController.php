<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class UserMenuController extends Controller
{
    
    public function index() {
    
        return view('user.menu.index');
    }

    public function option1() {
        
        return view('user.menu');
    }
}
