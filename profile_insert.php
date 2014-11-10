<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="h_wrapper">
			<div class="title">cafetail</div>
			<div class="username"><a href="community.php">username</a></div>
		</div>

	</header>

	<div class="wrapper">
		

		<?php 			
			$place = $_POST['place'];
			$result = [];
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
			foreach ($place as $key => $value) {
				# code...
				echo $place[$key], "、";
				$name = $place[$key];
				
				$num = mysql_query("select area_id from area where area_name = '".$place[$key]."'");

				$array  = mysql_fetch_assoc($num);
				$id = $array['area_id'];
	
				$sql = "INSERT INTO `GitNuldb`.`user_area` (`user_name`, `area_id`) VALUES ('kmdr', '".$id."');";
				$result_flag = mysql_query($sql);

				if (!$result_flag) {
				    die('INSERTクエリーが失敗しました。'.mysql_error());
				}

			}
			$close_flag = mysql_close($link);


		?>
		を登録しました。
	</div>


	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>