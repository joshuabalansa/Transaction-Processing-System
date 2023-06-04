<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $menus = Menu::paginate(10);
        return view('menu.index', [
            'menus' => $menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('menu.create');
    }

    /**
     * Store a newly created resource in menu.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required:min:2',
            'description' => 'required',
            'category' => 'required',
            'price' => ['required', 'numeric']
        ]);

        Menu::create($validate);

        return redirect()->route('menu.index')->with('success', 'Item added successfully!');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in menu.
     */
    public function update(Request $request, Menu $menu)
    {
        $validate = $request->validate([
            'name' => 'required:min:2',
            'description' => 'required',
            'category' => 'required',
            'price' => ['required', 'numeric']
        ]);

        $menu->update($validate);
        return redirect()->route('menu.index')->with('info', $menu->name . ' Has beed updated');
    }

    /**
     * Remove the specified resource from menu.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('danger', 'Item has been deleted!');
    }
}
