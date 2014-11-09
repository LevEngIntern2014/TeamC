<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reserve Questioner - cafe tail</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="css/jquery.minimalect.min.css">
	<script src="js/jquery.minimalect.min.js"></script>
	<script>
      $(document).ready(function(){
		$(".data1 #place").minimalect();
		$(".data1 #begin").minimalect();
		$(".data1 #end").minimalect();
		$(".data2 #place").minimalect();
		$(".data2 #begin").minimalect();
		$(".data2 #end").minimalect();
		$(".data3 #place").minimalect();
		$(".data3 #begin").minimalect();
		$(".data3 #end").minimalect();
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
		
		<h1>Reserve Questioner</h1>

		<p>場所と時間を３つまで候補としてあげてください。</p>

		<div class="data1">
			<p>候補１：</p>
			
			<select name="place" id="place">
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

					$sql = "SELECT area.area_id ,user_name, area_name FROM area , user_area WHERE user_area.area_id = area.area_id AND user_name LIKE 'kmdr'";
					$result = mysql_query($sql);
					if (!$result) {
    						die('クエリーが失敗しました。'.mysql_error());
					}
					while ($row = mysql_fetch_assoc($result)) {
						echo '<option value="', $row['area_name'], '">', $row['area_name'], '</option>';

 					}

					$close_flag = mysql_close($link);

?>

				<option value="渋谷">渋谷</option>
				<option value="五反田">五反田</option>
				<option value="中野">中野</option>
				<option value="町田">町田</option>
			</select>

			<select name="begin" id="begin">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>

			<select name="end" id="end">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>

			<div class="clear"></div>
		</div>
		<div class="data2">
			<p>候補２：</p>
			<select name="place" id="place">
				<option value="渋谷">渋谷</option>
				<option value="五反田">五反田</option>
				<option value="中野">中野</option>
				<option value="町田">町田</option>
			</select>

			<select name="begin" id="begin">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>

			<select name="end" id="end">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>

			<div class="clear"></div>
			</div>
		<div class="data3">
			<p>候補３：</p>
			<select name="place" id="place">
				<option value="渋谷">渋谷</option>
				<option value="五反田">五反田</option>
				<option value="中野">中野</option>
				<option value="町田">町田</option>
			</select>

			<select name="begin" id="begin">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>

			<select name="end" id="end">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>

			<div class="clear"></div>
		</div>

		<input id="submit_button" type="submit" name="submit" value="質問者へ送信する">

	</div>


	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>