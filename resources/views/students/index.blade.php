<!-- <!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>生徒名一覧</title>
  <h1>咸宜寮管理アプリ</h1>
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
  </header>
  
  <main>
    <article>
      <div>
        <h1>生徒名一覧</h1>
      </div>

      <table>
        <tr>
          <td>中１</td>
          <td>
             
          </td>
        </tr>
        <tr>
          <td>中２</td>
          <td>
            
          </td>
        </tr>
        <tr>
          <td>中３</td>
          <td>
             
          </td>
        </tr>
        <tr>
          <td>高１</td>
          <td>
             
          </td>
        </tr>
        <tr>
          <td>高２</td>
          <td>
             
          </td>
        </tr>
        <tr>
          <td>高３</td>
          <td>
             
          </td>
        </tr>
      </table>
    </article>
    <div>
        <a href="#">生徒情報の新規登録はこちら</a>
      <div>
  </main>

  @endsection