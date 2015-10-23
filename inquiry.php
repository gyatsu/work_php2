<?php
$title = $_POST['title'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$body = $_POST['body'];
?>
<!DOCTYPE html>
<html>
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
    <h1>入力内容の確認</h1>
    <p>以下の内容で確定します！</p>
    <div class="validation">
  <?php if(empty($title)){echo 'ERROR「件名を入力して下さい」<br>';}
  if(empty($name)){echo 'ERROR「名前を入力して下さい」<br>';}
  if(empty($mail)){echo 'ERROR「メールアドレスを入力して下さい」<br>';}
  $ret = preg_match("/^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+$/", $mail);
  if (!$ret) {
    echo "メールを正しい形式で入力して下さい。<br>";
  if(empty($body)){echo 'ERROR「本文を入力して下さい」<br>';}
  }
  ?>
  </div>
    件名:<br>
    <?php echo htmlspecialchars($title,ENT_QUOTES, "UTF-8");?><br>
    お名前:<br>
    <?php echo htmlspecialchars($name,ENT_QUOTES, "UTF-8");?><br>
    メールアドレス:<br>
    <?php echo htmlspecialchars($mail,ENT_QUOTES, "UTF-8");?><br>
    本文:<br>
    <?php echo htmlspecialchars($body,ENT_QUOTES, "UTF-8");?><br>
  <form action="mail.php" method="post">
    <input type="hidden" name="title" value="<?php echo htmlspecialchars($title, ENT_QUOTES, "UTF-8"); ?>">
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>">
    <input type="hidden" name="mail" value="<?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?>">
    <input type="hidden" name="body" value="<?php echo htmlspecialchars($body, ENT_QUOTES, "UTF-8"); ?>">

<?php if(empty($title) == 0 && empty($name) == 0 && empty($mail) == 0 && empty($body) == 0 && $ret == 1)
{
echo  "<input type='submit' value='送信する'><br>";
}

?>

  </form>
  <a href='index.php'>戻る</a>
  <br>
      <footer>
        <p><a href="http://nowall.co.jp">株式会社スパルタ</a></p>
        <small>©2015SPARTA,Inc.All Rights Reserved.</small>
      </footer>
  </body>
</html>