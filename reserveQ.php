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
		<form action="registQ.php" method="post">
		<?php

		function getlandmark($city){
		    $client_id = "WERMHHOZAOCGJ3M1ZMVOPKLDNDIARKFLWT5WC5RR3KEELFH5";
		    $client_secret = "B1XF5R03MZAUTI1KDPIXQXZ2KAO50NFQB0Z5QIXAAE3LDCSC";
		    $version = "YYYYMMDD";
		    $intent        = "browse";
		    $limit         = "10";                       // 取得件数(MAX:50)
		    $radius =        "100";
		    $near   = $city;  
		    $categoryId = "4bf58dd8d48988d16d941735,4bf58dd8d48988d174941735" ;    //カフェ、コワーキングスペース
		    // venues search
		    $url = "https://api.foursquare.com/v2/venues/search?";
		    // パラメーター
		    $params = 
		        // '&ll=' . "35.655433,139.733492" . 
		        '&near=' . $near .
		        '&client_id=' . $client_id . 
		        '&client_secret=' . $client_secret .
		        '&categoryId=' . $categoryId .
		        '&radius=' . $radius .
		        '&v=' . '20120712' . 
		        '&locale=' . 'en';
		    // リクエストURL
		    $url .= $params;
		    // JSONデータ取得
		    $res_in_json = file_get_contents( $url);
		    // 配列に変換
		    $res_in_array = json_decode( $res_in_json, true);

		    return $res_in_array;
		 
		}

		$res_in_array_s = getlandmark("Shibuya");
		$res_in_array_t = getlandmark("Tokyo");
		$res_in_array_r = getlandmark("Roppongi");

		?>

		<div class="data1">
			<p>候補１：</p>			
			<select name="place1" id="place1">
				<option value="渋谷"><?php echo $res_in_array_s["response"]["venues"][0]["name"] ?></option>
				<option value="五反田"></option>
				<option value="中野"><?php echo $res_in_array_t["response"]["venues"][1]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][2]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][3]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_t["response"]["venues"][4]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][5]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][6]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_t["response"]["venues"][7]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][7]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][8]["name"] ?></option>

			</select>

			<select name="begin1" id="begin1">
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">24:00</option>
			</select>

			<select name="end1" id="end1">
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">24:00</option>
			</select>

			<div class="clear"></div>
		</div>
		<div class="data2">
			<p>候補２：</p>
			<select name="place2" id="place2">
				<option value="渋谷"><?php echo $res_in_array_s["response"]["venues"][0]["name"] ?></option>
				<option value="五反田"></option>
				<option value="中野"><?php echo $res_in_array_t["response"]["venues"][1]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][2]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][3]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_t["response"]["venues"][4]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][5]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][6]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_t["response"]["venues"][7]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][7]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][8]["name"] ?></option>
			</select>

			<select name="begin2" id="begin2">
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">24:00</option>
			</select>

			<select name="end2" id="end2">
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">24:00</option>
			</select>

			<div class="clear"></div>
			</div>
		<div class="data3">
			<p>候補３：</p>
			<select name="place3" id="place3">
				<option value="渋谷"><?php echo $res_in_array_s["response"]["venues"][0]["name"] ?></option>
				<option value="五反田"></option>
				<option value="中野"><?php echo $res_in_array_t["response"]["venues"][1]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][2]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][3]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_t["response"]["venues"][4]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][5]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][6]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_t["response"]["venues"][7]["name"] ?></option>
				<option value="町田"><?php echo $res_in_array_r["response"]["venues"][7]["name"] ?></option>
				<option value="町田"></option>
				<option value="町田"><?php echo $res_in_array_s["response"]["venues"][8]["name"] ?></option>
			</select>

			<select name="begin3" id="begin3">
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">24:00</option>
			</select>

			<select name="end3" id="end3">
				<option value="1">1:00</option>
				<option value="2">2:00</option>
				<option value="3">3:00</option>
				<option value="4">4:00</option>
				<option value="5">5:00</option>
				<option value="6">6:00</option>
				<option value="7">7:00</option>
				<option value="8">8:00</option>
				<option value="9">9:00</option>
				<option value="10">10:00</option>
				<option value="11">11:00</option>
				<option value="12">12:00</option>
				<option value="13">13:00</option>
				<option value="14">14:00</option>
				<option value="15">15:00</option>
				<option value="16">16:00</option>
				<option value="17">17:00</option>
				<option value="18">18:00</option>
				<option value="19">19:00</option>
				<option value="20">20:00</option>
				<option value="21">21:00</option>
				<option value="22">22:00</option>
				<option value="23">23:00</option>
				<option value="24">24:00</option>
			</select>

			<div class="clear"></div>
		</div>

		<input id="submit_button" type="submit" name="submit" value="質問者へ送信する">
		</form>

	</div>


	<footer>
		<div class="footer">
			© 2014 Git NULL BOYZ
		</div>
	</footer>
</body>
</html>