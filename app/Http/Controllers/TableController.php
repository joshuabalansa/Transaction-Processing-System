<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::paginate('10');
        return view('admin.table.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.table.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'code' => 'required',
            'status' => 'required',
        ]);
        Table::create($validate);
        return redirect()->route('table.index')->with('success', 'New table has been added!');

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
    public function edit(Table $table)
    {
        return view('admin.table.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Table $table)
    {
        $validate = $request->validate([
            'code' => 'required',
            'status' => 'required'
        ]);
        $table->update($validate);
        return redirect()->route('table.index')->with('info', 'Table has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect()->route('table.index')->with('danger', 'Table has beed removed!');
    }
}
