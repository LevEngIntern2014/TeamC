<?php

function getlandmark(){
    $client_id = "WERMHHOZAOCGJ3M1ZMVOPKLDNDIARKFLWT5WC5RR3KEELFH5";
    $client_secret = "B1XF5R03MZAUTI1KDPIXQXZ2KAO50NFQB0Z5QIXAAE3LDCSC";
    $version = "YYYYMMDD";
    $intent        = "browse";
    $categoryId    = "4bf58dd8d48988d1e0931735"; // この例ではコーヒーショップ
    $limit         = "10";                       // 取得件数(MAX:50)
    $radius =        "100";  
    $categoryId = "4bf58dd8d48988d16d941735,4bf58dd8d48988d174941735" ;    //カフェ

    // venues search
    $url = "https://api.foursquare.com/v2/venues/search?";
    // パラメーター
    $params = 
        // '&ll=' . "35.655433,139.733492" . 
    	'&near=' . "渋谷" .
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

    return $url;
 
}

$url = getlandmark();
print $url;

?>