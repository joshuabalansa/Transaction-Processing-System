<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class UserMenuController extends Controller
{
    
    public function index() {
        $menus = Menu::all();
        return view('user.menu', compact('menus'));
    }

    public function selectedCategory($categoryId) {
        
        if($categoryId == 0) {

            $menus = Menu::all();
        } else {

            $menus = Menu::where('category', $categoryId)->get();
        }

        return view('user.menu', compact('menus'));
    }
}
