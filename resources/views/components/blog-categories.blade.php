@props(['categoriesCsv'])


@php 

    $categories = explode(',',$categoriesCsv)

@endphp

    @foreach($categories as $category)

        <li class="flex items-center justify-center m-2 text-white font-semibold bg-button-gradient rounded-xl py-1 px-3 mr-2 text-xs">
            <a  href="/?category={{$category}}">{{$category}}</a>
        </li>

    @endforeach 

