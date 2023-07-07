<!DOCTYPE html>
<html lang='ja'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規登録画面</title>
  <h1>咸宜寮管理アプリ</h1>
</head>

<body>
  <header>
       <h2>新規登録ページ</h2>
  </header>
  
  <main>
    <form action="" method="POST">
    <article>
      <table>
        <tr>
          <td>姓</td>
          <td>
             <input type="text" name="user_familyname">
          </td>
        </tr>
        <tr>
          <td>名</td>
          <td>
             <input type="text" name="user_firstname">
          </td>
        </tr>
        <tr>
          <td>職員ID</td>
          <td>
             <input type="text" name="user_id">
          </td>
        </tr>
        <tr>
          <td>パスワード</td>
          <td>
            <input type="text" name="password">
          </td>
        </tr>
        <tr>
          <td>パスワード（確認）</td>
          <td>
            <input type="text" name="password">
          </td>
        </tr>
      </table>
      <input type="submit" value="確認">

      <div>
        <a href="#">登録済みの方はこちら</a>
      <div>

    </article>
   </form>
  </main>

  <footer>

  </footer>

</body>

</html>