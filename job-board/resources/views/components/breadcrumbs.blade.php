<nav {{$attributes}}>
    <ul class="flex space-x-4 text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>
        @foreach ($links as $label => $links) 
        <li>-></li>
        <li>
            <a href="{{$links}}">
                {{$label}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>