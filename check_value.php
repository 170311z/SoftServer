<?php
//ON/OFFでの選択で変数$on_offの値が決まる
//ここでは$on_offをセッションを通してGlobal_on_offとして変数の値が生きているかチェック
//クラスとか用いればセッション通さなくてもできるかも?
error_reporting(-1);
session_start();
echo $_SESSION['Global_on_off'];

//以下コメントアウトしてます
/*
ob_start();
//include("warning_function_control.php");
require_once(dirname(__FILE__) . "/warning_function_control.php");
//ob_clean();
ob_get_contents();


/echo $_SESSION['Global_on_off'];


$vc = new Vc();
$vc->test();
class Vc {
    public function test() { 
	global $Global_on_off;
	echo $Global_on_off;
    }
}
*/
?>
