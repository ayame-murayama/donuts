@extends('layouts.app')

@section('content')

<h1>いちらんはここ</h1>

    @if (count($donuts) > 0)
        <ul>
            @foreach ($donuts as $donut)
                <li>{!! link_to_route('donuts.show', $donut->id, ['id' => $donut->id]) !!} : {{ $donut->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('donuts.create', '新規投稿') !!}

@endsection