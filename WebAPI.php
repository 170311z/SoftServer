<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
print("$id<br>\n");
}
if(isset($_GET['name'])){
$name = $_GET['name'];
print("$name<br> \n");
}

#データを準備します．
$arr = array('a' => $id, 'b' => $name);
#$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr)
?>

