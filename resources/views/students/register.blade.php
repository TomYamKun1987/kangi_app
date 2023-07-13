<!-- <!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>生徒情報新規登録</title>
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
        <h1>生徒情報新規登録</h1>
      </div>

      <table>
        <tr>
          <td>姓</td>
          <td>
             <input type="text" name="last_name">
          </td>
        </tr>
        <tr>
          <td>名</td>
          <td>
             <input type="text" name="first_name">
          </td>
        </tr>
        <tr>
          <td>生年月日</td>
          <td>
            <input type="text" name="birthday">
          </td>
        </tr>
        <tr>
          <td>学年配置</td>
          <td>
            <input type="text" name="grade">
          </td>
        </tr>
      </table>

     
    </article>
       <input type="submit" value="登録">
  </main>

  @endsection