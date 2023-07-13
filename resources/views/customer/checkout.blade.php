@dump($menu)
<br><br><br>
Available Menus
<br>
<ul>

{{-- Add data --}}
@foreach($menus as $data)
    <li>{{ $data->getName() }}</li>
@endforeach
</ul>