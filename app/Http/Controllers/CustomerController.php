<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Category;
class CustomerController extends Controller
{
    public $categories = [];

    public function index() {

        $menus = Menu::all();
        $categories = Category::all();

        if($menus->isEmpty()) {
           $data = [
                'menus' => $menus, 
                'isEmpty' => true,
                'categories' => $categories,
            ];
        }
        $data = [
            'menus' => $menus,
            'isEmpty' => false,
            'categories' => $categories
        ];
        return view('customer.menu', $data);
    }

    public function selectedCategory(string $categoryId) {
        
        $menus = ($categoryId === 0) ? Menu::all() : Menu::where('category', $categoryId)->get();
        $categories = Category::all();
        
        if ($menus->isEmpty()) {
            return view('customer.menu', [
                'menus' => $menus, 
                'isEmpty' => true,
                'categories' => $categories
            ]);
        }
        return view('customer.menu', [
            'menus' => $menus,
             'isEmpty' => false,
             'categories' => $categories
            ]);
    }
    public function checkout(Menu $menu) {
        
        $menus = Menu::all();
        return view('customer.checkout', compact('menu', 'menus'));
    }
}
