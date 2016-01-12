<!DOCTYPE html>

<html lang="ja">
  <head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<title>SIZKANIC</title>
	<link rel="stylesheet" href="user_screen_initial.css" type="text/css">
  </head>
  <body>
	<div id="d1">
	  <h1>図書館騒音情報</h1>
	  <h2>2F学習スペース①</h2>
	</div>
	<div id="d2">
	  <h3>騒音情報確認位置</h3>
	  <h3 id="d4"><a href="./user_screen_1f.php">1Fメディア学習室</a></h3>
	  <h3 id="d4">2F学習スペース①</h3>
	  <h3 id="d4"><a href="./user_screen_1f.php">2F学習スペース②</a></h3>
 	　 <h3 id="d4"><a href="./user_screen_initial.html">TOPへ戻る</a></h3>
	</div>
	<div id="d3">
	  <h1 id="d5">
<?php
		$_GET['area']='2a';
		include("./graph.html");
?>
	  </h1>
	</div>

  </body>
</html>
