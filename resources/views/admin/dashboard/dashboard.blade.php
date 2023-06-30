@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <a href="{{ route('menu.index') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $menuCount }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Total Menu</p>
        </a>
    </div>
    <div class="mb-4">
        <a href="{{ route('table.index') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $tableCount }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Total Available Table</p>
        </a>
    </div>
    <div class="mb-4">
        <a href="{{ route('stocks.index') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $stocksCount }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Total Stocks</p>
        </a>
    </div>
    <div class="mb-4">
        <a href="{{ route('staff.index') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $staffCount }}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Staff</p>
        </a>
    </div>
@endsection