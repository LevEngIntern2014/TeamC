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
			<span class="edit"><a href="profileEdit.html">Edit</a></span>
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
						$user_name = array('kinme','kinme','kinme');
						for ($i = 0; $i < count($user_name); $i++) {
							// echo $user_name[$i];
						
						    // $user_name = "kinme";
						    // venues search
						    $url[$i] = "http://teratail.com/api/users/$user_name[$i]/questions?offset=2&limit=2";

						    $res_in_json[$i] = file_get_contents($url[$i]);
						    // 配列に変換
						    $res_in_array[$i] = json_decode( $res_in_json[$i], true);
						
					    // var_dump($res_in_json);
						$accepted[$i] = $res_in_array[$i]["questions"][0]["accepted"];
						// echo $accepted[$i];

							if ($accepted[$i] == "受付中") {
							    $accepted_id[$i] = $res_in_array[$i]["questions"][0]["id"];
							    $accepted_display_name[$i] = $res_in_array[$i]["questions"][0]["display_name"];    
							    $accepted_title[$i] =  $res_in_array[$i]["questions"][0]["title"];
								// echo $accepted_title[$i];

							    $accepted_body[$i] =  $res_in_array[$i]["questions"][0]["body"];
							    $accepted_body_str[$i] =  $res_in_array[$i]["questions"][0]["body_str"];
							} 

						$accepted_select[$i] = array($accepted_id[$i],$accepted_display_name[$i],$accepted_title[$i],$accepted_body[$i],$accepted_body_str[$i]);
						
						}
				 	return $accepted_select;
					 
					}
					$accepted_select = getuserQuestion();
					// var_dump($res_in_array);
					// echo $res_in_array["questions"][0]["accepted"];

					?>


					<h2 class="title"><?php echo $accepted_select[0][2]; ?></h2>
					<div class="text">
						<?php echo $accepted_select[0][4];; ?>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title">2toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
						                        <!--本文　ここまで-->
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title">3toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
						                        <!--本文　ここまで-->
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
			</div>

			<div class="Items" id="tab2">
				<div class="boxItem">


					<h2 class="title">2toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title">toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
						                        <!--本文　ここまで-->
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title">toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
						                        <!--本文　ここまで-->
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
			</div>
			<div class="Items" id="tab3">
				<div class="boxItem">


					<h2 class="title">3toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title">toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
						                        <!--本文　ここまで-->
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


				</div>
				<div class="boxItem">


					<h2 class="title">toggleに似た動作なんですが実装方法を教えて下さい</h2>
					<div class="text">
						<p>やりたいことは、
						<br>
						<br>最初はdiv内の文章が隠れている状態
						<br>↓
						<br>ボタンクリック
						<br>↓
						<br>divの高さの縦線が右にスライド
						<br>同時に縦線が過ぎた後の文章が表示される
						<br>
						<br>
						<br>というものです。
						<br>
						<br>jqueryのtoggleを試してみましたが、文章自体が動いてしまうのと、縦線などを表示するオプションがなかったので、別の方法を探しています。
						<br>
						<br>よろしくお願いします。<br>
						</p>
						                        <!--本文　ここまで-->
					</div>
					<div class="user">
						<div class="icon"><img src="https://teratail.com/uploads/avatars/11221/t3ojImPX_thumbnail.jpg?1412870800" width="32" height="32" alt="lupus_dingo" class="icnUserThumb_22"></div>
						<div class="name">lupus_dingo</div>
						<div class="clear"></div>
					</div>
					<div class="button"><a href="reserveQ.html">→カフェで解決</a></div>


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