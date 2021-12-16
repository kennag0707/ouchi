<?php
require_once __DIR__ .'/dbconect.php';
?>
<!doctype html>
<html lang="ja">
<head>
<body>
  <header>
    <ul>
      <meta charset="UTF-8">
      <li><a class="active" href="">Home</a></li>
      <li><a href="post.php" >投稿</a></li>
      <li><a href="search.php">検索</a></li>
      <li><a href="login.php">ログイン</a></li>
    </ul>
  </header>
  
  <div class="bg_pattern Paper_v2"></div>
  
  <form name="login_form">
  
      <link rel="stylesheet" href="./css/login.css">
      <link rel="stylesheet" href="./css/style.css">
      <div class="login_form_top">
        
        <h1>ログイン画面</h1>
  
        <p>ユーザID、パスワードをご入力の上、「ログイン」ボタンをクリックしてください。</p>
  
</div>
    <form  action="confirm.php" method="POST">

      <div class="login_form_btm">

      <p>会員IDを入力<input type="text" name="user" required></p>
      <p>パスワードを入力<input type="password" name="password" required></p>

      </div>

        <div class="bo">
            <button  type="submit"> ログイン</button>
            <a href="signup.html">
            <button type="button">新規作成</button>
            </a>
</div>

    </form>
  </form>
</head>
</body>