<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>profile Edit - cafetail</title>
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
			<div class="title"><a href="community.php">cafetail</a></div>
			<div class="username"><a href="community.php">username</a></div>
		</div>
	</header>

	<div class="wrapper">
		
		<h1>Area</h1>

		<p>あなたの作業エリアを指定してください.</p>

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

			$old_area = mysql_query("SELECT area_id from user_area where user_name = 'kmdr' group by area_id");
			if (!$old_area) {
			    die('クエリーが失敗しました。'.mysql_error());
			}


			echo "<p>すでに登録されている地域は、";
			while($fetch = mysql_fetch_array($old_area, MYSQL_ASSOC)){
				$old_area_name = mysql_query("SELECT area_name from area where area_id = '".$fetch['area_id']."'");
				$old_area_name_fetch = mysql_fetch_assoc($old_area_name);
				echo $old_area_name_fetch['area_name']. "、";

			}

			echo "です。</p>";

			$old_area_name_fetch = mysql_fetch_assoc($old_area_name);
			echo $old_area_name_fetch['area_name'];

		?>

		<form method="POST" action="profile_insert.php">
			<select multiple name="place[]" id="place">
			<?php


			$result = mysql_query('SELECT * FROM `area`');
			if (!$result) {
			    die('クエリーが失敗しました。'.mysql_error());
			}

			while ($row = mysql_fetch_assoc($result)) {
			    echo '<option value="', $row['area_name'], '">', $row['area_name'], '</option>';
			}

			$close_flag = mysql_close($link);

			?>
			</select><br />
			<input id="submit_button" type="submit" name="submit" value="保存する">
		</form>



	</div>


	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>
