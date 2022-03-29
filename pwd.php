<?php
$data=curl_init();
curl_setopt($data, CURLOPT_URL, "http://ip-api.com/json");
curl_setopt($data, CURLOPT_RETURNTRANSFER, "http://ip-api.com/json");
$result= curl_exec($data);
$result= json_decode($result);
//print_r($result);
// if ($result->status== 'success ') {
// 	echo  $result->country;
// }

echo  $result->country;
  ?>