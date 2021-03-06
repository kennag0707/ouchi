<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規作成</title>
  <link rel="stylesheet" href="./css/signup.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<div class="bg_pattern Paper_v2"></div>

<header>
    <ul>
      <li><a class="active" href="">Home</a></li>
      <li><a href="post.html" >投稿</a></li>
      <li><a href="search.html">検索</a></li>
      <li><a href="login.html">ログイン</a></li>
    </ul>
  </header>
  <h1>新規作成</h1>
<form>
    <div class="example">
      <li for="namelabel">名前</li>
      <input type="text" name="name" id="namelabel" placeholder="例）鈴木　太郎">
    </div>
    <div class="example">
      <li for="maillabel">メールアドレス</li>
      <input class="inputs" type="email" name="email" id="maillabel" placeholder="○○○.jp">
    </div>
    <div class="example">
      <li for="password">パスワード</li>
      <input id="password"type="password">
    </div>
    <div class="example">
      <input type="submit" value="送信する">
    </div>  
</form>
