<?php 
$weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Almaty,kz&APPID=2b86350d3431c066d2b104c4b64757e2');
$json = json_decode($weather);
// print_r($json);
$json2 = json_encode($json, JSON_PRETTY_PRINT);
// var_dump($json2);
if ($weather != null) {
	$file = fopen("http://university.netology.ru/u/shesterin/log.json", "w");
	fwrite($file, $json2);
	fclose($file);
};
$file2 = fopen("http://university.netology.ru/u/shesterin/log.json", "r");
$file3 = readfile("http://university.netology.ru/u/shesterin/log.json");
// $array = file($file2);

?>