@extends('layouts.app')

@section('content')

<h1>id: {{ $donut->id }} の編集ページ</h1>

    {!! Form::model($donut, ['route' => ['donuts.update', $donut->id], 'method' => 'put']) !!}

        {!! Form::label('name', '投稿者:') !!}
        {!! Form::text('name') !!}
        
        {!! Form::label('title', '記事タイトル:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('tag', 'タグ:') !!}
        {!! Form::text('tag') !!}
        
        {!! Form::label('category', 'カテゴリー:') !!}
        {!! Form::text('category') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection