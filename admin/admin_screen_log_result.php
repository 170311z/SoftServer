<?php
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}
/*
$db['host'] = "localhost";  // DBサーバのurl
$db['user'] = "sw2";
$db['pass'] = "hamada";
$db['dbname'] = "sw2";

$mysqli = new mysqli($db['host'], $db['user'], $db['pass']);
if ($mysqli->connect_errno) {                               
  print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
  exit();                                                                       
}                                                                               

// データベースの選択
$mysqli->select_db($db['dbname']);


//クエリの実行
                //$query = "SELECT * FROM 1min_sound_info WHERE area_id = '" . $choice2 ."'";
		$query = "SELECT * FROM 1min_sound_info";
                $result = $mysqli->query($query);
                if (!$result) {
                        print('クエリが失敗しました。' . $mysqli->error);
                        $mysqli->close();
                        exit();
                }
*/
//データベースから切断
//$mysqli->close();
?>

<html lang="ja">
  <head>        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">                                                                        
        <meta http-equiv="Content-Style-Type" content="text/css">        
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <title>SIZKANIC 管理者用ページ</title>                           
        <link rel="stylesheet" href="admin_screen_1.css" type="text/css">
  </head>                                                                
  <body>                                                                 
        <div id="d1">                                                    
          <h1>管理者画面</h1>                                            
          <h2>ログ情報の管理</h2>                                        
        </div>                                                           
        <div id="d2">                                                    
 	<p>ｘｘ月xx日ｘｘ時〜ｘｘ時までのログ情報</p>
	</div>
	
	<!--<?php include("log_result.php");?>-->
	<?php	
	$db['host'] = "localhost";  // DBサーバのurl
	$db['user'] = "sw2";
	$db['pass'] = "hamada";
	$db['dbname'] = "sw2";

	$mysqli = new mysqli($db['host'], $db['user'], $db['pass']);
	if ($mysqli->connect_errno) {
  	print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
  	exit();
	}

	// データベースの選択
	$mysqli->select_db($db['dbname']);


	//クエリの実行
	<!--$query = "SELECT * FROM 1min_sound_info WHERE area_id = '" . $choice2 ."'";-->
	<!--$query = "SELECT * FROM 1min_sound_info";-->
	<!--$result = $mysqli->query($query);-->
	$result = mysql_query('SELECT * FROM 1min_sound_info');
	if (!$result) {
		print('クエリが失敗しました。' . $mysqli->error);
		$mysqli->close();
		exit();
	}
	

	while ($data = mysql_fetch_array($result)) {
		echo '<p>' . $data['dev_id'] . ':' . $data['day'] . ':' . $data[time] . ':' . $data['level'] . ':' . $data['area_id'] . "</p>\n";
	}
        ?>
	<div align="center">
	<h2><a href="logout.php">ログアウト</a></h2>
	</div>
	</body>
</html>
