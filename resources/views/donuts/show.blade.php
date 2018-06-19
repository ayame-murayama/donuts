@extends('layouts.app')

@section('content')

<h1>id = {{ $donut->id }} の詳細ページ</h1>

    <p>{{ $donut->name }}</p>
    <p>{{ $donut->title }}</p>
    <p>{{ $donut->content }}</p>
    <p>{{ $donut->tag }}</p>
    <p>{{ $donut->category }}</p>

    {!! link_to_route('donuts.edit', '編集', ['id' => $donut->id]) !!}

    @if (Auth::user()->id == $donut->user_id)
    {!! Form::model($donut, ['route' => ['donuts.destroy', $donut->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    @endif
    
    
@endsection