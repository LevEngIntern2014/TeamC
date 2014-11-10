<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reserve Answer - cafetail</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="h_wrapper">
			<div class="title">cafetail</div>
			<div class="username"><a href="#">username</a></div>
		</div>
	</header>

	<div class="wrapper">
		
		<h1>Reserve Answer</h1>

		<p><span class="aUsername">kmdr</span>さんからカフェへ行く日程が以下の候補で届いています。</p>
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

			$query = mysql_query("select event_id from reserve where questioner_name = 'kmdr'");

			while($fetch = mysql_fetch_array($query, MYSQL_ASSOC)){


				$schedule = mysql_query("SELECT * from schedule where event_id = '".$fetch['event_id']."' group by day,time_start");
				while($sche = mysql_fetch_assoc($schedule)){
				echo $sche['day']. "　";
				echo $sche['time_start']. "~";
				echo $sche['time_end'];
				echo "<a>この日に決定する</a><br />";
				// echo $old_area_name_fetch['area_name']. "、";
}
			}


			// foreach ($place as $key => $value) {
			// 	# code...
			// 	echo $place[$key], "、";
			// 	$name = $place[$key];
				
			// 	$num = mysql_query("select area_id from area where area_name = '".$place[$key]."'");

			// 	$array  = mysql_fetch_assoc($num);
			// 	$id = $array['area_id'];
	
			// 	$sql = "INSERT INTO `GitNuldb`.`user_area` (`user_name`, `area_id`) VALUES ('kmdr', '".$id."');";
			// 	$result_flag = mysql_query($sql);

			// 	if (!$result_flag) {
			// 	    die('INSERTクエリーが失敗しました。'.mysql_error());
			// 	}

			// }
			$close_flag = mysql_close($link);


		?>



<!-- 		<table class="reserveA">
			<thead>
				<tr>
					<th></th>
					<th>場所</th>
					<th>開始時間</th>
					<th>終了</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr class="table1">
					<td>候補１</td>
					<td>カフェ〜</td>
					<td>12時</td>
					<td>13時</td>
					<td><a href="#">OK</a></td>
				</tr>
				<tr class="table2">
					<td>候補２</td>
					<td>カフェ〜２</td>
					<td>15時</td>
					<td>18時</td>
					<td><a href="#">OK</a></td>
				</tr>
				<tr class="table3">
					<td>候補３</td>
					<td>カフェ〜３</td>
					<td>12時</td>
					<td>13時</td>
					<td><a href="#">OK</a></td>
			</tr>
			</tbody>
		</table> -->


	</div>
	

	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>