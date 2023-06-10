<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Stock;
use App\Models\Table;
use App\Models\Staff;

class SummaryController extends Controller
{
    public function index()
    {
        $menuCount = Menu::count();
        $stocksCount = Stock::count();
        $staffCount = Staff::count();
        $tableCount = Table::count();

        return view('components.dashboard', compact('menuCount', 'stocksCount', 'staffCount', 'tableCount'));
    }
}
