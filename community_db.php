<?php
mb_internal_encoding("UTF-8");
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');
$result = mysql_query('SET NAMES UTF8;');
$db_selected = mysql_select_db('GitNuldb', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>GitNuldbデータベースを選択しました。</p>');

$sql = "SELECT area.area_id ,user_name, area_name FROM area , user_area WHERE user_area.area_id = area.area_id AND user_name LIKE 'kmdr'";
$result = mysql_query($sql);
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}
$num = 0;
while ($row = mysql_fetch_assoc($result)) {
 $sql = "SELECT * FROM `user_area` WHERE area_id =".$row['area_id'];
var_dump($sql);
 $array[] = mysql_query($sql);
if (!$array[$num]) {
    die('クエリーが失敗しました。'.mysql_error());
}
$num ++;
}

$close_flag = mysql_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}

?>
</body>
</html>