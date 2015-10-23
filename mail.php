<?php
$title = $_POST['title'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$body = $_POST['body'];
?>
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
    <h1>お問い合わせが完了</h1>
    <p>以下の内容でお問い合わせを受付ました！</p>
    <p>お問い合わせありがとうございます！</p>
    件名:<br>
    <?php echo htmlspecialchars($title, ENT_QUOTES, "UTF-8"); ?><br>
    お名前:<br>
    <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?><br>
    メールアドレス:<br>
    <?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?><br>
    本文:<br>
    <?php echo htmlspecialchars($body, ENT_QUOTES, "UTF-8"); ?><br>

<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$subject = "お問い合わせ：".$_POST["title"]."：".date( "Y/m/d G:i:s:e" );

$to = "php@yatsukouji.com";
$header = "From: ". $_POST["mail"];
$body = "■件名：" . $_POST["title"] ."\n";
$body .= "■名前：" . $_POST["name"] ."\n";
$body .= "■メールアドレス：" . $_POST["mail"] ."\n";
$body .= "■内容：" . $_POST["body"] ."\n";

$returnpath = '-f job@yatsukouji.com';

if(mb_send_mail($to,$subject,$body,$header,$returnpath))
{
   echo "メール送信成功しました。<br>";
}
else
{
   echo "メール送信失敗しました。";
}
?>

    <p><a href='index.php'></a></p>
  <a href="index.php">戻る</a>
  <br>
      <footer>
        <p><a href="http://nowall.co.jp">株式会社スパルタ</a></p>
        <small>©2015SPARTA,Inc.All Rights Reserved.</small>
      </footer>
</body>
</html>