<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Community - cafetail</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script>
		$(function() {
			$( ".tab" ).tabs();
		});
	</script>
</head>
<body>
	<header>
		<div class="h_wrapper">
			<div class="title">cafetail</div>
			<span class="username">username</span>
			<span class="edit"><a href="profileEdit.php">Edit</a></span>
		</div>
	</header>

	<div class="wrapper">
		
		<h1>Community</h1>
	
		<div class="tab">
			<ul>
				<li><a href="#tab1">新宿</a></li>
				<li><a href="#tab2">中野</a></li>
				<li><a href="#tab3">小田原</a></li>
			</ul>

			<div class="Items" id="tab1">

				<div class="boxItem">
					<?php




					function getuserQuestion(){
												mb_internal_encoding("UTF-8");
						$link = mysql_connect('localhost', 'root', '');
						if (!$link) {
						    die('接続失敗です。'.mysql_error());
						}

						// print('<p>接続に成功しました。</p>');
						$result = mysql_query('SET NAMES UTF8;');
						$db_selected = mysql_select_db('GitNuldb', $link);
						if (!$db_selected){
						    die('データベース選択失敗です。'.mysql_error());
						}

						// print('<p>GitNuldbデータベースを選択しました。</p>');

						$sql = "SELECT area.area_id ,user_name, area_name FROM area , user_area WHERE user_area.area_id = area.area_id AND user_name LIKE 'kmdr'";
						$result = mysql_query($sql);
						if (!$result) {
						    die('クエリーが失敗しました。'.mysql_error());
						}
						$num = 0;
						while ($row = mysql_fetch_assoc($result)) {
							$sql = "SELECT * FROM `user_area` WHERE user_name NOT LIKE 'kmdr' AND  area_id =".$row['area_id'] ;
							// echo $row['area_id'] ;
							//var_dump($sql);
						 	$array[$num] = mysql_query($sql);
							if (!$array[$num]) {
						   		 die('クエリーが失敗しました。'.mysql_error());
							}

							while ($row = mysql_fetch_assoc($array[$num])) {
								$user_name_db[] =  $row['user_name'];
							}
							$num ++;
						}

						$close_flag = mysql_close($link);

						if ($close_flag){
						    // print('<p>切断に成功しました。</p>');
						};

						// $user_name = array('$user_name_db[0]','$user_name_db[1]','$user_name_db[2]');
						for ($i = 0; $i <= count($user_name_db); $i++) {
								$user_name_ar[$i] = $user_name_db[$i];
						}

						$user_name = array($user_name_ar[1],"kinme","lolipop","b2205856","kooya");


						for ($i = 0; $i < count($user_name); $i++) {
							// echo $user_name[$i];
						
						    // $user_name = "kinme";""
						    // venues search
						    $url[$i] = "http://teratail.com/api/users/$user_name[$i]/questions?offset=2&limit=2";

						    $res_in_json[$i] = file_get_contents($url[$i]);
						    // 配列に変換
						    $res_in_array[$i] = json_decode( $res_in_json[$i], true);
						
						    // var_dump($res_in_json);
							$accepted[$i] = $res_in_array[$i]["questions"][1]["accepted"];
							// echo $accepted[$i];

							if ($accepted[$i] == "受付中") {
							    $accepted_id[$i] = $res_in_array[$i]["questions"][0]["id"];
							    $accepted_display_name[$i] = $res_in_array[$i]["questions"][0]["display_name"];    
							    $accepted_title[$i] =  $res_in_array[$i]["questions"][0]["title"];

							    $accepted_body[$i] =  $res_in_array[$i]["questions"][0]["body"];
							    $accepted_body_str[$i] =  $res_in_array[$i]["questions"][0]["body_str"];
							    $accepted_select[$i] = array($accepted_id[$i],$accepted_display_name[$i],$accepted_title[$i],$accepted_body[$i],$accepted_body_str[$i]);
							} else {
								// echo "string";
								// echo $i;
							}

						
						}
					// echo $accepted_select;

				 	return $accepted_select;
					 
					}
					$accepted_select = getuserQuestion();
					// var_dump($res_in_array);
					// echo $res_in_array["questions"][0]["accepted"];

					?>


					<h2 class="title"><?php echo $accepted_select[0][2]; ?></h2>
					<div class="text">
						<?php echo $accepted_select[0][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[0][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[1][2]; ?></h2>
					<div class="text">
						<?php echo $accepted_select[1][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[1][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[2][2]; ?></h2>
					<div class="text">
							<?php echo $accepted_select[2][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[2][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
			</div>

			<div class="Items" id="tab2">
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[1][2]; ?></h2>
					<div class="text">
							<?php echo $accepted_select[1][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[1][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[0][2]; ?></h2>
					<div class="text">
							<?php echo $accepted_select[0][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[0][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[2][2]; ?></h2>
					<div class="text">
							<?php echo $accepted_select[2][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[2][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
			</div>
			<div class="Items" id="tab3">
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[2][2]; ?></h2>
					<div class="text">
							<?php echo $accepted_select[2][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[2][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[1][2]; ?></h2>
					<div class="text">
								<?php echo $accepted_select[1][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[1][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title"><?php echo $accepted_select[0][2]; ?></h2>
					<div class="text">
							<?php echo $accepted_select[0][4]; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name"><?php echo $accepted_select[0][1]; ?></div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.php">→カフェで解決</a></div>


				</div>
			</div>

		</div>
	</div>


	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>