<!-- <!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>生徒情報投稿一覧</title>
</head> -->

@extends('layouts.app')

@section('content')

<body>
  <header>
    <nav>
      <div>
        <a href="#">ホーム</a>
      <div>
      <div>
        <a href="#">戻る</a>
      </div>

    </nav>

    <div>
        <h2>引き継ぎ記録一覧</h2>
      </div>
  </header>
  
  <main>
    <article>
      <from action="{{ route('studentBlogs.store') }}" method="post">
        @csrf
        <
      


    </article>
  </main>

  @endsection