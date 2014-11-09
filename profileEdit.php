<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="css/select2.css" rel="stylesheet"/>
    <script src="js/select2.js"></script>

	<script>
      $(document).ready(function(){
      	$("#place").select2();
      });
	</script>
</head>
<body>
	<header>
		<div class="h_wrapper">
			<div class="title">cafetail</div>
			<div class="username"><a href="#">username</a></div>
		</div>
	</header>

	<div class="wrapper">
		
		<h1>Area</h1>

		<p>あなたの作業エリアを指定してください。</p>
		<select multiple name="place" id="place">
<?php
mb_internal_encoding("UTF-8");
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

$result = mysql_query('SET NAMES UTF8;');
$db_selected = mysql_select_db('GitNuldb', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

$result = mysql_query('SELECT * FROM `area`');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
    echo '<option value=\"', $row['area_name'], '\">', $row['area_name'], '</option>';
}

$close_flag = mysql_close($link);

?>
		</select><br />
		<input id="submit_button" type="submit" name="submit" value="保存する">




	</div>


	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>
