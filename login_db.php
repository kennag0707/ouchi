<?php
  //送られてきたユーザーIDとパスワードを受け取る
  $userId = $_POST['userId'];
  $password = $_POST['password'];
  
  //Userオブジェクトを生成し、「authUser()メソッド」を呼びだし、認証結果を受け取る
  require_once __DIR__ . '/../classes/user.php';
  $user = new User();
  $result = $user->authUser($userId, $password);
  
  session_start();
  //ログインに失敗した場合、エラーメッセージをセッションに保存し、ログイン画面(login.php)に遷移する
  if(empty($result['userId'])){
  $_SESSION['login_error']='ユーザーID 、パスワードを確認してください。';
  header('Location:./login.php');
  exit();
  }
  
  //データベースから名前を取り出す
  $userName = $result['userName'];
  
  //cartテーブルに仮のuserIdで保存された商品があれば正式なログインユーザーに変更する
  $user->changeCartUserId($_SESSION['userId'], $userId);

  //ユーザー情報をセッションに保持する・・今回は個別に保持する方法をとる  $_SESSIOuserIdN['userId'] = $userId;
  $_SESSION['userId'] = $userId;
  $_SESSION['userName'] = $userName;
  $_SESSION['kana'] = $result['kana'];
  $_SESSION['zip'] = $result['zip'];
  $_SESSION['address'] = $result['address'];
  $_SESSION['tel'] = $result['tel'];
  
  //ユーザーIDと名前をクッキーに保持する。。有効期限を2週間(= 60 * 60 * 24 * 14 秒)に設定
  setcookie("userId", $userId, time() + 60 * 60 * 24 * 14,'/');
  setcookie("userName", $userName, time() + 60 * 60 * 24 * 14,'/');
  
  require_once __DIR__ . '/../header.php';
  require_once __DIR__ . '/../util.php';
?>
<p>こんにちは、<?=h($userName)?>さん。</p>
<p>ショッピングをお楽しみください。</p>
<?php
  require_once __DIR__ . '/../footer.php';
?>