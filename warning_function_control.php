<?php
//認証関連のファイルと連結させてないので、とりあえずセッション管理についてはコメントアウトしています
//admin_screen_changeから遷移します
session_start();
//変数の初期化
$on_off = 1;

// ログイン状態のチェック
//連結させていないのでコメントアウト(ログインとつながるから消さないで)
/*
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	$on_off = $_POST["on_off"];
} else {
   echo "フォームからアクセスして";
   exit(1);
}

//グローバル変数?とする
//admin_screen_change.php実行後check_value.phpから確認してください
$_SESSION['Global_on_off'] = $on_off;

?>
<!doctype html>
<html>
  <head>
  <meta charset="UTF-8">
  <title>警告機能制御モ admin_screen_change.htmlのon/offによる変数の変化の確認</title>
  </head>
  <body>
  <h1>警告機能制御モ　admin_screen_change.htmlのon/offによる変数の変化の確認</h1>
　初期状態をONとする<br />
  現在の状態は:
<?
if ($on_off == 0) echo "OFF(変数の値は0)";
if ($on_off == 1) echo "ON(変数の値は1)" ;
/*echo $on_off ? "ON(変数の値は)" : "OFF(変数の値は)"; ?><br />*/
?>
<br />
  check_value.phpを開いて変数の値が保持されているか確認してください 
  </body>
  </html>

