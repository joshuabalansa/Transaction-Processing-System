@extends('layouts.app')

@section('content')
@php
    $alerts = [
        'success' => ['green-800', 'green-50'],
        'danger' => ['red-800', 'red-50'],
        'info' => ['blue-800', 'blue-50']
    ];
@endphp

@foreach ($alerts as $key => $styles)
    @if (session($key))
        <div class="p-4 mb-4 text-sm text-{{ $styles[0] }} rounded-lg bg-{{ $styles[1] }} dark:bg-gray-800 dark:text-green-400"  role="alert">
            <span class="font-medium">{{ session($key) }}</span>
        </div>
    @endif
@endforeach

<h1 class="flex mb-5 items-center text-3xl font-extrabold dark:text-white">Customer</h1>
<div class="p-2">
    <a href="#" class="mb-px text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</a>
</div>
<div class="relative overflow-x-auto  sm:rounded-lg p-5">
    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        
               {{-- foreach --}}
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 
                </th>
                <td class="px-6 py-4">
                --
                </td>
                <td class="px-6 py-4">
                --
                </td>
                <td class="px-6 py-4">
               --
                </td>
                <td class="px-6 py-4">
              --
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            {{--endforeach--}}
        </tbody>
        
    </table>
    <center>
    {{-- Count check --}}
    </center>
</div>
<div class="mt-2">
    {{-- Pagination --}}
</div>
@endsection