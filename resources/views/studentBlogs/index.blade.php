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

    <div>
       @foreach($posts as $post)
        <div>
          <div>
            <p>{{ $post->content }}</p>
          </div>
        </div>
       @endforeach
    </div>
     <div>
       @if (session('flash_message'))
         <p>{{ session('flash_message') }}</p>
         @endif

        <from action="{{ route('studentBlogs.store') }}" method="post">
          @csrf
    
        <div>
          <label for="content">本文</label>
          <textarea name="content"></textarea>
        </div>
            <button type="submit">投稿</button>
        </form>
      </div>
    </article>
  </main>

  @endsection