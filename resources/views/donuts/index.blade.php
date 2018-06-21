<head>
    <style>
        .category0 {
            background-color: red;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

<h1>いちらんはここ</h1>

    @if (count($donuts) > 0)
        <div class="category0">
        @if ($donuts->category == 0)
        <ul>
            @foreach ($donuts as $donut)
                <li>{!! link_to_route('donuts.show', $donut->id, ['id' => $donut->id]) !!} : {{ $donut->content }}</li>
            @endforeach
        </ul>
        @endif
        </div>
        
        <div class="category1">
        @if ($donuts->category == 1)
        <ul>
            @foreach ($donuts as $donut)
                <li>{!! link_to_route('donuts.show', $donut->id, ['id' => $donut->id]) !!} : {{ $donut->content }}</li>
            @endforeach
        </ul>
        @endif
        </div>
    @endif
    
    {!! link_to_route('donuts.create', '新規投稿') !!}

@endsection
</body>