<!doctype html>
<html lang="ja">
<head>
<body>
  <header>
    <ul>
      <meta charset="UTF-8">
      <li><a class="active" href="">Home</a></li>
      <li><a href="post.html" >投稿</a></li>
      <li><a href="search.html">検索</a></li>
      <li><a href="login.html">ログイン</a></li>
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
  
      <div class="login_form_btm">
  
        <input type="id" name="user_id" placeholder="ユーザーIDを入力してください"><br>
        <input type="password" name="password"placeholder="パスワードを入力してください">
  
      </div>

      <form action="">
        <?php
        $dsn="mysql:dbname=ouchi;host=localhost;charset=UTF8";
        $user = 'ouchi';
        $password = 'pass';
        $pdo = new PDO($dsn, $user, $password);
        ?>
        <div class="bo">
          <button type="submit" >ログイン</button>
          <a href="signup.html">
            <button type="button">新規作成</button>
          </a>
        </div>  
        
      </form>
  </form>
</head>
</body>