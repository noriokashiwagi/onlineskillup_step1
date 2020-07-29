<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTのサンプル</title>
</head>
<body>
<?php
  //commentがPostされているなら
  if(isset($_POST["comment"])){
      //エスケープしてから表示
      $comment = htmlspecialchars($_POST["comment"]);
      print("あなたのコメントは「${comment}」です。");
  } else {
?>
    <p>コメントしてください</p>
    <form method="POST" action="index.php">
        <input name="comment">
        <input type="submit" value="送信">
    </form>
<?php
  }
?>
</body>
</html>