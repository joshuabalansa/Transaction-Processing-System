<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index() {
        $menus = Menu::all();
        if($menus->isEmpty()) {

            return view('customer.menu', ['menus' => $menus, 'isEmpty' => true]);
        }
        return view('customer.menu', ['menus' => $menus, 'isEmpty' => false]);
    }

    public function selectedCategory(int $categoryId) {
        
        $menus = ($categoryId === 0) ? Menu::all() : Menu::where('category', $categoryId)->get();
        if ($menus->isEmpty()) {
            return view('customer.menu', ['menus' => $menus, 'isEmpty' => true]);
        }
        return view('customer.menu', ['menus' => $menus, 'isEmpty' => false]);
    }
    public function checkout(Menu $menu) {
        
        $menus = Menu::all();
        return view('customer.checkout', compact('menu', 'menus'));
    }
}
