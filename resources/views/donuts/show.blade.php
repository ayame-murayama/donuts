<head>
    <style>
        .content {
          background-color: pink;
          margin-left: 30%;
          margin-right: 30%;
          padding: 50px;
        }
    </style>
</head>
<body>
@extends('layouts.app')


@section('content')

<div class="content">
<h1>記事詳細ページ</h1>

    <p>投稿者名☛{{ $donut->name }}</p>
    <p>タイトル☛{{ $donut->title }}</p>
    <p>内容☛{{ $donut->content }}</p>
    <p>タグ☛{{ $donut->tag }}</p>

    

    @if (Auth::user()->id == $donut->user_id)
    {!! Form::model($donut, ['route' => ['donuts.destroy', $donut->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    @endif
</div>    
    
@endsection
</body>