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

    public function selectedCategory(int $categoryId) {
        
        $menus = ($categoryId === 0) ? Menu::all() : Menu::where('category', $categoryId)->get();
        if ($menus->isEmpty()) {
            return view('user.menu', ['menus' => $menus, 'isEmpty' => true]);
        }
        return view('user.menu', ['menus' => $menus, 'isEmpty' => false]);
    }
}
