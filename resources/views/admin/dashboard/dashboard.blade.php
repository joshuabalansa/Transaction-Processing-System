@extends('layouts.app')

@section('content')
<div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 flip-in-hor-bottom">
    <a href="{{ route('menu.index') }}" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $menuCount }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Total Menu</p>
    </a>
    <a href="{{ route('table.index') }}" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $tableCount }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Total Available Table</p>
    </a>
    <a href="{{ route('stocks.index') }}" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $stocksCount }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Total Stocks</p>
    </a>
    <a href="{{ route('staff.index') }}" class="flex-1 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $staffCount }}</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Staff</p>
    </a>
</div>
<div class="mt-10">
    <div id="chart_div"></div>
</div>
<script>
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', 'Sales');

            data.addRows([
                ['Jan', 0], ['Feb', 10], ['Mar', 23], ['Apr', 90], ['May', 18], ['Jun', 9],
                ['Jul', 11], ['Aug', 27], ['Sep', 33], ['Oct', 40], ['Nov', 32], ['Dec', 35]
            ]);

            var options = {
                hAxis: {
                    title: 'Month'
                },
                vAxis: {
                    title: 'Sales'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
@endsection