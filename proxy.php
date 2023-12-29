<?php
// 接收前端POST请求的数据
$postData = http_build_query([
    'UserName' => 'S7E5554EF4A4E691C19C7E47DDD4D256',
    'Type' => '3',
]);

// 目标服务器URL
$targetUrl = 'https://vip1.eydata.net/752289cd268b02f4';

// 创建cURL请求
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $targetUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// 执行cURL请求并获取响应
$response = curl_exec($ch);

// 检查是否有cURL错误
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// 关闭cURL资源
curl_close($ch);

// 输出响应
echo $response;
?>
