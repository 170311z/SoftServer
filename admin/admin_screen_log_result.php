<?php
session_start();
// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}

$monthstart = $_POST["month"];
$daystart = $_POST["day"];
$hourstart = $_POST["hour"];
$monthstop = $_POST["month2"];
$daystop = $_POST["day2"];
$hourstop = $_POST["hour2"];
$area = $_POST["choice2"];
echo "$monthstart, $daystart, $hourstart,<br /> $monthstop, $daystop, $hourstop,<br /> $area<br />";

if ($monthstart > $monthstop) {
	echo "月を時系列に合わせて入力してください<br />";
}
if ($monthstart == $monthstop && $daystart > $daystop) {
	echo "日を時系列に合わせて入力してください<br />";
}
if (($monthstart == $monthstop && $daystart == $daystop) && $hourstart >= $hourstop) {
	echo "時間を時系列に合わせて入力してください<br />";
}

//DBの情報
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
//$query = "SELECT * FROM 1min_sound_info WHERE day LIKE '%" . $monthstart . $daystart . "'";
$query = "SELECT * FROM 1min_sound_info WHERE area_id = '" . $area . "' AND day BETWEEN '2015" . $monthstart . $daystart . "' AND '2015" . $monthstop . $daystop . "' AND time BETWEEN '" . $hourstart . "01' AND '" . $hourstop . "00'";


$result = $mysqli->query($query);
if($result) {
	while($row = $result->fetch_object()) {
		$dbidresult = htmlspecialchars($row->dev_id);
		$dayresult = htmlspecialchars($row->day);
		$timeresult = htmlspecialchars($row->time);
		$levelresult = htmlspecialchars($row->level);
		$areaidresult = htmlspecialchars($row->area_id);
		print("$dbidresult : $dayresult : $timeresult : $levelresult : $areaidresult<br />");
	}
}

/*
if (!$result) {
	print('クエリが失敗しました。' . $mysqli->error);
	$mysqli->close();
	exit();
}
*/
echo "$result<br />";
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
	<div align="center">
	<h2><a href="logout.php">ログアウト</a></h2>
	</div>
	</body>
</html>
