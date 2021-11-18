<?php
$queryString = http_build_query([
  'auth' => '',
  'scantext' => '42 Luỹ Bán Bích, Tân Thới Hoà, Tân Phú, Hồ Chí Minh',
  'region' => 'VN',
  'geojson' => '1'
]);

$ch = curl_init(sprintf('%s?%s', 'https://geocode.xyz', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);

curl_close($ch);

$apiResult = json_decode($json, true);

print_r($apiResult);
?>