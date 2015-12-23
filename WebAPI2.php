<?php
if(isset($_GET['dev_id'])){
$dev_id = $_GET['dev_id'];
print("$dev_id\n");
}
if(isset($_GET['level'])){
$level = $_GET['level'];
print("$level\n");
}

define('DB_DATABASE', 'sw2');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
	// connect
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//insert
	$db->exec("insert into 1min_sound_info (dev_id, level) values ($dev_id, $level)");

	//disconnect
	$db = null;

} catch (PDOException $e) {
	echo $e->getMessage();
	exit;
}

if($level > 50){
#データを準備します．
$arr = array('a' => $dev_id, 'b' => $level, 'c' => 'alert');
echo json_encode($arr);
}
?>
