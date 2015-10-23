<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>お問い合わせページ</title>
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>

  <body>
    <nav>
      <ul>
        <li class="on"><a href="index.php">入力画面</a></li>
        <li><a href="#">確認画面</a></li>
        <li><a href="#">完了画面</a></li>
        </ul>
    </nav>
    <h1>入力画面</h1>
    <p>以下の項目すべてに入力して下さい！</p>
    <form action="inquiry.php" method="post">
    件名:<br>
    <input type="text" name="title"><br>
    お名前:<br>
    <input type="text" name="name"><br>
    メールアドレス:<br>
    <input type="text" name="mail"><br>
    本文:<br>
    <textarea name="body" rows="10" cols="70"></textarea><br>
    <input type="submit" value="送信する">
    </form>
    <br>
      <footer>
        <p><a href="http://nowall.co.jp">株式会社スパルタ</a></p>
        <small>©2015SPARTA,Inc.All Rights Reserved.</small>
      </footer>
  </body>
</html>



