@extends('layouts.app')

@section('content')

    <h1>👑新規投稿はコチラから👑</h1>

    {!! Form::model($donut, ['route' => 'donuts.store']) !!}

        {!! Form::label('name', '投稿者:') !!}
        {!! Form::text('name') !!}<br>
        
        {!! Form::label('title', '記事タイトル:') !!}
        {!! Form::text('title') !!}<br>
        
        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}<br>
        
        {!! Form::label('tag', 'タグ:') !!}
        {!! Form::text('tag') !!}<br>
        
        {!! Form::label('category', 'カテゴリー:') !!}
        {!! Form::select('category',['あ','い','う','え','お','か','き','く']) !!}
        
        

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection