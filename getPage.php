<?php
// 建立CURL連線
$ch = curl_init();

// 設定擷取的URL網址
curl_setopt($ch, CURLOPT_URL, "http://inspiregate.com/8-programming/327-php-curl-teaching.html");
curl_setopt($ch, CURLOPT_HEADER, false);
//將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

// 執行
// url_exec($ch);
$temp=curl_exec($ch);
echo $temp;
// 關閉CURL連線
curl_close($ch)
?>